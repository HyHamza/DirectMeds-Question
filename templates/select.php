<?php
// Fetch configured products from the database
$configured_products = get_option('qp_product_mapping', []);
$enabled_product_ids = [];
foreach ($configured_products as $pid => $details) {
    if (!empty($details['enabled'])) {
        $enabled_product_ids[] = $pid;
    }
}

// Fetch WooCommerce product data for enabled products
$wc_products = !empty($enabled_product_ids) ? wc_get_products(['include' => $enabled_product_ids, 'status' => 'publish', 'limit' => -1]) : [];

// Prepare a new structure for the frontend JavaScript
$js_products = [];
foreach ($wc_products as $product) {
    $product_id = $product->get_id();
    if (isset($configured_products[$product_id])) {
        $settings = $configured_products[$product_id];
        $internal_id = $settings['internal_id'];

        $js_dosages = [];
        foreach ($settings['dosages'] as $key => $dosage) {
            $coupon_price = $dosage['price'] - ($settings['coupon']['type'] === 'one-time' ? $settings['coupon']['discount'] : 0);
            $followup_price = $dosage['price'];
            if ($settings['coupon']['type'] === 'lifetime') {
                $followup_price -= $settings['coupon']['discount'];
            }

            $js_dosages[$key === 0 ? 'default' : $dosage['name']] = [
                'package_code' => $dosage['sku'],
                'name' => $dosage['name'],
                'price' => (float)$dosage['price'],
                'coupon_discount' => (float)$settings['coupon']['discount'],
                'coupon_price' => $coupon_price,
                'followup_price' => $followup_price,
            ];
        }

        $js_products[$internal_id] = [
            'type' => 'Dynamic', // Or some other identifier
            'dosage' => $js_dosages,
        ];
    }
}

$first_product_wc = !empty($wc_products) ? current($wc_products) : null;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Choose Your Medication</title>
    <link href="../assets/css_from_site/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css_from_site/qualify-v2.css" rel="stylesheet">
    <link href="../assets/css_from_site/chat.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css_from_site/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="../assets/img_from_site/favicon.png">
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container justify-content-center">
        <img src="../assets/img_from_site/logo-dk.png" alt="Weight Loss Advocates" width='60px' class="img-fluid">
    </div>
</nav>
<section class="container-fluid offsetbg">
    <div class="row">
        <div class="bannerbar">
            <span class="bannerbartext">
                Your <b>Discount</b> has been applied! Checkout now to claim this discount.
            </span>
        </div>
    </div>
</section>
<section class="container-fluid offsetbg">
    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="container">
        <input type="hidden" name="action" value="WeightLossAdvocates_submit">
        <input type="hidden" name="page_slug" value="select">
        <div class="row">
            <div class="col-md-6">
                <div class="spacer">&nbsp;</div>
                <img src="<?php echo $first_product_wc ? esc_url(wp_get_attachment_image_url($first_product_wc->get_image_id(), 'full')) : ''; ?>" class="img-fluid product-feature" id="product-feature" style="border-radius:75px;">
                <div class="spacer">&nbsp;</div>
            </div>
            <div class="col-md-6"><br>
                <h1>Select your Medication</h1>
                <p>Medication & Doctor Consultation/Review Included</p>
                <br><br>
                <div class="row g-3 mb-3">
                    <?php if (!empty($wc_products)) :
                        $is_first = true;
                        foreach ($wc_products as $product) :
                            $internal_id = $configured_products[$product->get_id()]['internal_id'];
                            ?>
                            <div class="col-6 col-lg-3">
                                <div class="p-2 product-select <?php echo $is_first ? 'selected' : ''; ?>">
                                    <input type="radio" name="product" value="<?php echo esc_attr($internal_id); ?>" <?php echo $is_first ? 'checked' : ''; ?>/>
                                    <img src="<?php echo esc_url(wp_get_attachment_image_url($product->get_image_id(), 'thumbnail')); ?>" class="img-fluid"><br>
                                    <div class="product-name"><?php echo wp_kses_post($product->get_name()); ?></div>
                                </div>
                            </div>
                        <?php
                            $is_first = false;
                        endforeach;
                    else :
                    ?>
                        <p>No products are currently available. Please check back later.</p>
                    <?php endif; ?>
                </div>
                <?php if (!empty($wc_products)) :
                    $is_first = true;
                    foreach ($wc_products as $product) :
                        $internal_id = $configured_products[$product->get_id()]['internal_id'];
                ?>
                        <div class="product-toggle product<?php echo esc_attr($internal_id); ?>" style="<?php echo $is_first ? '' : 'display:none'; ?>">
                            <h6><b><?php echo wp_kses_post($product->get_name()); ?></b></h6><br>
                            <div class="product-description"><?php echo wp_kses_post($product->get_description()); ?></div>
                        </div>
                <?php
                        $is_first = false;
                    endforeach;
                endif;
                ?>
                <span id="couponBox" class="coupon-box" style="display:none">
                    Discount Active! <span id="couponDiscountAmount" class="discount-amount"></span>
                </span>
                <div id="priceLine" class="product-price sticky-mobile"></div>
                <div class="container">
                    <div class="mb-3">
                        <label for="paymentSelect" class="form-label">Select Payment Plan</label>
                        <select class="form-select form-select-lg w-100" id="paymentSelect" name="payment_plan" required>
                            <?php
                            if ($first_product_wc) {
                                $first_product_settings = $configured_products[$first_product_wc->get_id()];
                                foreach ($first_product_settings['payment_plans'] as $key => $plan) {
                                    echo '<option value="' . esc_attr($key) . '">' . esc_html($plan['label']) . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="protocolSelect" class="form-label"><b>Subscribe and Save!</b> Select Prescription Length</label>
                        <select class="form-select form-select-lg w-100" id="protocolSelect" name="protocol_length" required>
                            <?php
                            if ($first_product_wc) {
                                $first_product_settings = $configured_products[$first_product_wc->get_id()];
                                foreach ($first_product_settings['protocol_lengths'] as $protocol) {
                                    echo '<option value="' . esc_attr($protocol['value']) . '" data-discount="' . esc_attr($protocol['discount']) . '" data-months="' . esc_attr($protocol['months']) . '" data-benefit="' . esc_attr($protocol['benefit']) . '" data-labels="' . esc_attr($protocol['labels']) . '">' . esc_html($protocol['label']) . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <div class="benefit-labels" id="benefitLabels"></div>
                        <p class="benefit-label" id="toggleBenefit">Why this is a great option >></p>
                        <div class="benefit-box" id="benefitBox"><p id="benefitText"></p></div>
                    </div>

                    <div class="mb-3">
                        <label for="dosageSelect" class="form-label">Select Weekly Starting Dosage</label>
                        <select class="form-select form-select-lg w-100" id="dosageSelect" name="dosage" required>
                             <?php
                            if ($first_product_wc) {
                                $first_product_settings = $configured_products[$first_product_wc->get_id()];
                                foreach ($first_product_settings['dosages'] as $key => $dosage) {
                                    echo '<option value="' . ($key === 0 ? 'default' : esc_attr($dosage['name'])) . '">' . esc_html($dosage['name']) . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn ctaBtn1">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const products = <?php echo json_encode($js_products); ?>;
    const configuredProducts = <?php echo json_encode($configured_products); ?>;

    document.addEventListener('DOMContentLoaded', function() {
        const productSelectors = document.querySelectorAll('.product-select');
        const modeSelectors = document.querySelectorAll('input[name="product"], #protocolSelect, #paymentSelect, #dosageSelect');
        const protocolSelector = document.getElementById('protocolSelect');
        const paymentSelector = document.getElementById('paymentSelect');
        const toggleBenefit = document.getElementById("toggleBenefit");
        const benefitBox = document.getElementById("benefitBox");
        const benefitText = document.getElementById("benefitText");
        const benefitLabels = document.getElementById("benefitLabels");

        function updateProductToggles(productId) {
            document.querySelectorAll('.product-toggle').forEach(toggle => {
                toggle.style.display = 'none';
            });
            const activeToggle = document.querySelector('.product-toggle.product' + productId);
            if (activeToggle) {
                activeToggle.style.display = 'block';
            }
        }

        function updatePriceDetails() {
            const internalId = document.querySelector('input[name="product"]:checked').value;
            const protocolLengthOption = protocolSelector.selectedOptions[0];
            const paymentPlanKey = paymentSelector.value;
            const dosageKey = dosageSelect.value;

            const couponBox = document.getElementById('couponBox');
            const couponDiscountAmount = document.getElementById('couponDiscountAmount');

            const productData = products[internalId];
            if (!productData) return;

            const dosageData = productData.dosage[dosageKey];
            if (!dosageData) return;

            let wcProductId = null;
            for (const [pid, details] of Object.entries(configuredProducts)) {
                if (details.internal_id === internalId) {
                    wcProductId = pid;
                    break;
                }
            }

            if (!wcProductId) return;
            const productSettings = configuredProducts[wcProductId];

            const price = dosageData.price;
            const couponDiscount = productSettings.coupon.discount;
            const couponType = productSettings.coupon.type;
            const couponPrice = dosageData.coupon_price;
            const followupPrice = dosageData.followup_price;

            const protocolDiscount = Number(protocolLengthOption.dataset.discount);
            const protocolMonths = Number(protocolLengthOption.dataset.months);

            const paymentPlan = productSettings.payment_plans[paymentPlanKey];

            if (couponDiscount > 0) {
                couponBox.style.display = 'inline-block';
                couponDiscountAmount.innerHTML = '-$' + String(couponDiscount);
            } else {
                couponBox.style.display = 'none';
            }

            if (paymentPlan && paymentPlan.label.toLowerCase().includes('upfront') && protocolMonths > 1) {
                const upfrontDiscount = parseFloat(paymentPlan.discount);
                const priceToday = (((price - protocolDiscount) * protocolMonths) * (1 - upfrontDiscount)) - (couponType === 'one-time' ? couponDiscount : 0);
                const priceFollowUp = ((followupPrice - protocolDiscount) * protocolMonths) * (1 - upfrontDiscount);
                document.getElementById('priceLine').innerHTML = `<b style="font-size:1.5rem;">$<span class="priceToday">${priceToday.toFixed(2)}</span></b>/today and then $<span class="priceFollowUp">${priceFollowUp.toFixed(2)} every ${protocolMonths} months</span>`;
            } else {
                const priceToday = couponPrice - protocolDiscount;
                const priceFollowUp = followupPrice - protocolDiscount;
                document.getElementById('priceLine').innerHTML = `<b style="font-size:1.5rem;">$<span class="priceToday">${priceToday.toFixed(2)}</span></b>/today for your first month ${priceFollowUp > 0 ? `then $<span class="priceFollowUp">${priceFollowUp.toFixed(2)}/mo</span> thereafter` : ''}`;
            }
        }

        function updateBenefitContent() {
            const selectedOption = protocolSelector.options[protocolSelector.selectedIndex];
            benefitText.innerHTML = selectedOption.getAttribute("data-benefit");
            benefitLabels.innerHTML = "";
            const labels = selectedOption.getAttribute("data-labels").split(",");
            labels.forEach(label => {
                const [color, text] = label.split(":");
                const pill = document.createElement("span");
                pill.className = `benefit-pill ${color.trim()}`;
                pill.textContent = text.trim();
                benefitLabels.appendChild(pill);
            });
        }

        function updateDropdowns(productId) {
            const settings = configuredProducts[productId];

            paymentSelector.innerHTML = '';
            settings.payment_plans.forEach((plan, key) => {
                paymentSelector.options.add(new Option(plan.label, key));
            });

            protocolSelector.innerHTML = '';
            settings.protocol_lengths.forEach(protocol => {
                const option = new Option(protocol.label, protocol.value);
                option.dataset.discount = protocol.discount;
                option.dataset.months = protocol.months;
                option.dataset.benefit = protocol.benefit;
                option.dataset.labels = protocol.labels;
                protocolSelector.options.add(option);
            });

            dosageSelect.innerHTML = '';
            settings.dosages.forEach((dosage, key) => {
                dosageSelect.options.add(new Option(dosage.name, key === 0 ? 'default' : dosage.name));
            });

            updatePriceDetails();
            updateBenefitContent();
        }

        productSelectors.forEach(element => {
            element.addEventListener('click', (event) => {
                document.querySelectorAll('.product-select.selected').forEach(item => item.classList.remove('selected'));
                const selectedProduct = event.target.closest('.product-select');
                selectedProduct.classList.add('selected');
                const internalId = selectedProduct.querySelector('input[name="product"]').value;

                let wcProductId = null;
                for (const [pid, details] of Object.entries(configuredProducts)) {
                    if (details.internal_id === internalId) {
                        wcProductId = pid;
                        break;
                    }
                }

                if (wcProductId) {
                    updateDropdowns(wcProductId);
                    updateProductToggles(internalId);
                    // Update main product image if you have a mapping for it
                }
            });
        });

        modeSelectors.forEach(element => {
            element.addEventListener('change', updatePriceDetails);
        });

        protocolSelector.addEventListener('change', updateBenefitContent);

        toggleBenefit.addEventListener("click", function () {
            if (!benefitBox.classList.contains("expanded")) {
                updateBenefitContent();
                benefitBox.classList.add("expanded");
                toggleBenefit.innerHTML = "Hide details <<";
            } else {
                benefitBox.classList.remove("expanded");
                toggleBenefit.innerHTML = "Why this is a great option >>";
            }
        });

        // Initial setup for the first product
        const firstProductId = "<?php echo $first_product_wc ? $first_product_wc->get_id() : ''; ?>";
        if (firstProductId) {
            updateDropdowns(firstProductId);
            const firstInternalId = configuredProducts[firstProductId].internal_id;
            updateProductToggles(firstInternalId);
        }
    });
</script>
</body>
</html>
