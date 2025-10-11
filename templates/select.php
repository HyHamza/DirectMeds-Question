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
$first_product_name = $first_product_wc ? $first_product_wc->get_name() : '';
$first_product_image_url = $first_product_wc ? wp_get_attachment_image_url($first_product_wc->get_image_id(), 'full') : '';
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
        .benefit-labels { display: flex; gap: 5px; flex-wrap: wrap; margin-top: 5px; }
        .benefit-pill { font-size: 12px; font-weight: 600; padding: 4px 8px; border-radius: 15px; color: #fff; display: inline-block; background: #e9ecef; }
        .benefit-pill.green { background: #91c993; }
        .benefit-pill.blue { background: #97c6ce; }
        .benefit-pill.orange { background: #eebf82; }
        .benefit-pill.gray { background: #917fa0; }
        .benefit-label { color: #007bff; font-size: 14px; cursor: pointer; display: inline-block; margin-top: 5px; }
        .benefit-label:hover { text-decoration: underline; }
        .benefit-box { background: #ffffff; border:1px solid #ccc; border-radius: 8px; margin-top: 5px; overflow: hidden; max-height: 0; padding: 0; transition: max-height 0.4s ease-in-out, padding 0.2s ease-in-out; }
        .benefit-box.expanded { max-height: 500px; padding: 10px; }
        .faq-avatar{width: 50px; height: 50px; border-radius: 50%;}
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
        <input type="hidden" name="selected_product_name" id="selected_product_name" value="<?php echo esc_attr($first_product_name); ?>">
        <input type="hidden" name="selected_product_image_url" id="selected_product_image_url" value="<?php echo esc_attr($first_product_image_url); ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="spacer">&nbsp;</div>
                <img src="<?php echo $first_product_wc ? wp_get_attachment_image_url($first_product_wc->get_image_id(), 'full') : ''; ?>" class="img-fluid product-feature" id="product-feature" style="border-radius:75px;">
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
                                <div class="p-2 product-select <?php echo $is_first ? 'selected' : ''; ?>" data-product-name="<?php echo esc_attr($product->get_name()); ?>" data-product-image-url="<?php echo esc_attr(wp_get_attachment_image_url($product->get_image_id(), 'full')); ?>">
                                    <input type="radio" name="product" value="<?php echo esc_attr($internal_id); ?>" <?php echo $is_first ? 'checked' : ''; ?>/>
                                     <img src="<?php echo wp_get_attachment_image_url($product->get_image_id(), 'thumbnail'); ?>" class="img-fluid"><br>
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
                        <p class="note">*Fully refundable if the doctor does not approve your medication after reviewing your information.</p>
                    </div>
                </div>
                 <!--/dropdown -->
                <div class="row">
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center mb-2"><i class="bi bi-check2 text-success me-2"></i>Telemed Doctor Consultations Included (Reg: $99/visit)</li>
                                    <li class="d-flex align-items-center mb-2"><i class="bi bi-check2 text-success me-2"></i>Patient Satisfaction Guaranteed</li>
                                    <li class="d-flex align-items-center mb-2"><i class="bi bi-check2 text-success me-2"></i>HSA Accepted</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center mb-2 zofran"><i class="bi bi-check2 text-success me-2"></i>Anti-nausea medication included</li>
                                    <li class="d-flex align-items-center mb-2"><i class="bi bi-check2 text-success me-2"></i>US based FDA approved pharmacy guaranteed</li>
                                    <li class="d-flex align-items-center mb-2"><i class="bi bi-check2 text-success me-2"></i>Prescription purchase refundable before pharmacy shipment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <br><b>GLP-1 Dosage Schedule</b><br><br>
                            <div class="accordion accordion-flush" id="dosageSchedule">
                                <!-- Static Accordion Items Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<div class="container-fluid ">
    <div class="row">
        <div class="squares bannerbar">
            <div class="row">

                <div class="col-lg-6 offset-lg-3 col-md-12">
                    <div class="row">
                        <div class="col-3">
                            <center>
                                <img src="../assets/img_from_site/guarantee.png" class="img-fluid">
                            </center>
                        </div>
                        <div class="col my-auto">

                            <h4>Patient Satisfaction Guarantee</h4>
                            <p class="textalt2" style="font-size:12px;">Your satisfaction and success are our priority. If you decide before your prescription ships that our program isn’t for you, we’ll cancel your order and provide a full refund. While we cannot process refunds once your prescription has been shipped, our expert staff has lots of options at their disposal to help you hit your weightloss goal and you can cancel future shipments at any time. </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 offset-lg-3 col-md-12">
            <div class="squares">
                <div class="row">
                    <div class="col sq5">
                        <i class="bi bi-arrow-down-right"></i>
                        <h1>10%</h1>
                        <p>Average reduction in body weight over 6 months*</p>
                    </div>
                    <div class="col sq5">
                        <i class="bi bi-chat-heart"></i>
                        <h1>8/10</h1>
                        <p>Users say this is more effective than anything they've ever tried</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col sq5">
                        <i class="bi bi-hourglass"></i>
                        <h1>6"</h1>
                        <p>Average reduction in waist size</p>
                    </div>
                    <div class="col sq5">
                        <span class="altpink"></span><i class="bi bi-emoji-heart-eyes"></i>
                        <h1>92%</h1>
                        <p>Users have achieved lasting weight loss</p>
                    </div>
                </div>

            </div>
            <div class="col-12 fineprint"><br>
                * Based on the average weight loss in three 68-week clinical trials of patients without diabetes who
                reached and maintained a dose of 2.4 mg/week of GLP-1 treatment, along with a reduced- calorie diet and
                increased physical activity. <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC10851954/" target="_blank" rel="nofollow" style="padding:0;">See details</a>. Results may vary based on starting weight and program
                adherence. Medication prescriptions are at the discretion of medical providers and may not be suitable
                for everyone. Consult a healthcare professional before starting any weight loss program.
            </div>


            <div class="spacer">&nbsp;</div>
            <div class="spacer">&nbsp;</div>
            <br>




        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-lg-6 testimonial">
            <b>Lost 12 pounds the first month!</b>
            <div class="starsrow">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>This medication was a life changer for me. I’m a 49-year-old female. I never had a problem with my weight until after the age of 45. Then during Covid, I gained 30 pounds and got up to 189. I was exercising regularly and trying to eat healthy, but could not lose any weight. I started Tirzepatide and lost 12 pounds the first month. I had very little side effects. The only thing I experienced was fatigue, a slight headache, and I felt very cold. Once I became used to the medication, after a couple of months, those side effects diminished. I’ve been on the medication for 6 months and have lost a total of 56 pounds. I’m now at 133 pounds. My goal weight is 130. I feel better than I did when I was in my 20s and 30s. This medication was life-changing for me. It not only helped me to lose weight, but it also lowered my A1C, lowered my triglycerides, and blood pressure.</p>

        </div>
        <div class="col-lg-6  testimonial">
            <b>I no longer feel ravenous!</b>
            <div class="starsrow">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>39-year-old female, starting weight okay. So, I am on my 3rd shot of the lowest dose of 2.5mg. I have had very minimal side effects. My stool is a bit tacky at times, which I combat with fiber gummies. I have lost 14 pounds in less than three weeks!! My appetite is minimal at best, and I've been walking 10k steps a day. I no longer feel ravenous. I can go 12+ hours without eating and feel just fine. I have also simultaneously quit smoking (or greatly reduced) as well as cutting caffeine, and I was afraid that I would be compelled to eat more to compensate, but nope! That urge to bored eat is completely gone!! Like people have said, this is no miracle drug. You have to want to change, but this can help you significantly. My energy is soooo much better. I'm sleeping better. I feel amazing, and it's only week 3!!</p>

        </div>
        <div class="col-lg-6  testimonial">
            <b>Changed my life</b>
            <div class="starsrow">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>This medication has changed my life. Not only can I finally lose weight at a reasonable rate/level of effort, I genuinely enjoy exercising because I have the energy. I no longer see exercise as a price I have to pay to lose weight (and then not even lose weight anyway). My appetite has also plummeted. I have to remind myself to eat. There are occasional 'breakthrough' cravings, so I'll let myself have a treat, but after taking one or two bites I can't fathom eating it anymore. I don't know the exact rate that I've lost weight, but I've been on the drug for 4 or 5 months now and have lost about 30 lbs (went from 210 to 180). This is with casual effort where I exercise when I'm up for it (usually 3-4x/week for 45 min). I do not count calories, just eat intuitively. Taking this medication does not make you weak, lazy, or wanting an easy way out (I've heard it all). If offered this medication, please just give it a try! </p>

        </div>
        <div class="col-lg-6  testimonial">
            <b>I went from 210 to 150 lbs</b>
            <div class="starsrow">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>I started Tirzepatide at 2.5 mg, 8 months later I am at the 7.5 mg dose but to maintain my loss I now take it twice a month. I went from 210 to 150 lbs. This is a life-changer for me. It took all my cravings for bad food away, no more chips and pizza. I eat a much healthier diet now and like many others eat much less. My heartburn problems are gone and I have a lot more energy. </p>

        </div>
        <div class="col-lg-6  testimonial">
            <b>Lost 48lbs in exactly 7 months</b>
            <div class="starsrow">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>Good results. Immediate appetite suppression starting with the lowest dose. More importantly, my food cravings went away. It takes a couple of weeks, at most, to get through the psychological part of less appetite/less food. You get full quickly, and yet you feel like you still want to eat because your mind is telling you, 'how can you be full already, you've only had 4 bites?' It only takes one or two times of being nauseated or vomiting to remember to eat less. I have lost 48 lbs in exactly 7 months, and my hypertension is gone.</p>

        </div>
        <div class="col-lg-6  testimonial">
            <b>So grateful for this medicine!</b>
            <div class="starsrow">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>I started at a size XXL/pants size 16 and 213 lbs. After a little over a year, I am now 125 lbs and a size small/pants size 2. Semaglutide literally reset my entire body chemistry and metabolism. I never dieted nor exercised the past year. I don’t want to lose any more weight, so I just went down to a 1 mg half dose to maintain my weight loss. I am so grateful for this medicine!</p>

        </div>
    </div>
</div>
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

                // Update hidden fields and main product image
                const productName = selectedProduct.dataset.productName;
                const productImageUrl = selectedProduct.dataset.productImageUrl;
                document.getElementById('selected_product_name').value = productName;
                document.getElementById('selected_product_image_url').value = productImageUrl;
                document.getElementById('product-feature').src = productImageUrl;
                
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
