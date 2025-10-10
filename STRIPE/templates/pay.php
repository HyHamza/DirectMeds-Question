<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="googlebot" content="noindex">
<meta name="Slurp" content="noindex">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta name="description" content="">
<meta name="author" content="">
<!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Info</title>
    <link href="../assets/css_from_site/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css_from_site/qualify-v2.css" rel="stylesheet">
    <link href="../assets/css_from_site/chat.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css_from_site/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="../assets/img_from_site/favicon.png">
    <style>
        #shipping-divider {
            display: none;
        }
        @media (max-width:500px) {
            #shipping-divider {
                display: block;
                margin: 12px;
                max-width: calc(100% - 24px);
            }
        }
        .error-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: 4px;
            display: none;
        }
        .error-message.show {
            display: block;
        }
        .form-control.is-invalid {
            border-color: #dc3545;
        }
        .form-control.is-valid {
            border-color: #28a745;
        }
    </style>
</head>
<body style="background-color:#f8f8f7;">
  <!--[if lte IE 9]><p class="browsehappy">Hi, we really want to show you our website, but you are using an outdated
    browser that our website cannot communicate with. Please visit us again after you have upgraded your browser and
    have the best experience that you can with our website.<br>This website can help you: <a
            href="http://browsehappy.com/">browsehappy.com</a></p><![endif]--><form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" id="ccForm">
    <input type="hidden" name="action" value="checkout_submit">
    <input type="hidden" name="page_slug" value="checkout">
    <nav class="navbar navbar-expand-lg bannerbar">
        <div class="container justify-content-center">
            <img src="../assets/img_from_site/logo.png" width='60px' alt="Weight Loss Advocates" class="img-fluid">
        </div>
    </nav>
    <div class="container-fluid">
        <section class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12">
                    <div class="spacer">&nbsp;</div>
                    <div class="spacer">&nbsp;</div>
                    <div class="spacer">&nbsp;</div>

                    <center><h2>Your order is ready for payment.</h2></center>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col stats-item inversebg offsetbg">
                            <div class="row">
                                <div class="col-4">
                                    <img src="../assets/img_from_site/v2/product_<?php echo esc_attr($product ?? '1'); ?>.jpg" class="img-fluid">
                                </div>
                                <div class="col my-auto" style="font-size:14px">
                                         Medication & Supplies<br/>
                                        Payment Plan: Monthly<br/>
                                        <small style="font-weight:400;">Your doctor will review and revise your dosage as needed.</small>
                                </div>
                                <hr id="shipping-divider">
                                <div class="col my-auto">
                                    <b>Shipping to:</b><br>
                                    <?php echo esc_html($shipping_address1 ?? ''); ?><br>
                                    <?php echo esc_html($shipping_city ?? ''); ?>, <?php echo esc_html($shipping_state ?? ''); ?> <?php echo esc_html($shipping_zipcode ?? ''); ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col  text-end">
                                    Telemed Visits with Doctor/Evaluation
                                </div>
                                <div class="col-4 my-auto  text-end" style="padding-right:25px;">
                                    FREE
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col  text-end">
                                    Next-day UPS Rush Delivery <br><span class="textalt2">(All medications are ice-packed and insured.)</span>
                                </div>
                                <div class="col-4 my-auto  text-end" style="padding-right:25px;">
                                    FREE
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex totals">
                                <div class="col" style="padding-left:25px;">
                                    <h2>Total</h2></div>
                                <div class="col text-end" style="padding-right:25px;">
                                    <h4><b style="font-size:1.5rem;">$<?php echo isset($price) ? number_format($price, 2) : '297.00'; ?></b></h4>
                                </div>
                            </div>
                            <!--<div class="row" style="margin-bottom:0"><center><small style="font-size:12px;font-weight:300;color:#999">And then $/mo starting next month</small></center></div>-->
                        </div>
                    </div>


                    <div class="spacer">&nbsp;</div>
                    <div class="row">
                        <div class="col">
                            <center>That's it! With Weight Loss Advocates, our pricing is All-Inclusive and comes with our Customer Weight Loss Satisfaction Guarantee!</center>
                        </div>
                    </div>
                    <div class="spacer">&nbsp;</div>
                    <div class="row">
                        <div class="col">
                            <div class="inversebg" style="border:1px solid #ccc;">
                                <div class="inversehdr"><i class="bi bi-shield-lock-fill"></i> Secure Payment</div>
                                <div class="pcinner">

                                    <div class="row">
                                        <div class="col"><h3>Payment Info</h3></div>
                                        <div class="col text-end">
                                            <img src="../assets/img_from_site/cards.png" style="width:150px;" class="img-fluid">
                                        </div>

                                        <div class="col-12">
                                            <label for="stripe-card-number">Card Number</label><br>
                                            <input type="tel" name="stripe-card-number" required id="stripe-card-number"
                                                   class="form-control required" placeholder="•••• •••• •••• ••••" />
                                            <div class="error-message" id="card-number-error"></div>
                                        </div>
                                        <div class="col-8">
                                            <label for="stripe-card-expiry">Expiration</label><br>
                                            <input type="tel" name="stripe-card-expiry" required id="stripe-card-expiry"
                                                   class="form-control required" placeholder="MM / YY" />
                                            <div class="error-message" id="card-expiry-error"></div>
                                        </div>
                                        <div class="col-4">
                                            <label for="stripe-card-cvc">CVC</label><br>
                                            <input type="tel" name="stripe-card-cvc" required id="stripe-card-cvc"
                                                   class="form-control required" placeholder="•••" />
                                            <div class="error-message" id="card-cvc-error"></div>
                                        </div>
                                        <div class="col-12">
                                            <!-- Used to display form errors. -->
                                            <div id="card-errors" role="alert" class="error-message" style="color: #dc3545; font-size: 14px; margin-top: 10px;"></div>
                                        </div>
                                    </div>
                                    <div class="row d-flex mb-3">

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="checkbox" name="acknowledge_0"
                                                   value="yes"                                                    required> <span style="font-size:14px;font-weight:normal;">I agree to the <a href="terms.php" target="_blank" style="color:#000;">Terms and Conditions</a>, <a href="terms.php#refunds" target="_blank" style="color:#000;">Refund Policy</a>, <a href="privacy.php" target="_blank" style="color:#000;">Privacy Policy</a>, and I understand and acknowledge the risks and benefits of the prescribed drug. I acknowledge that my prescription will be reviewed by a medical practitioner for final approval before being shipped to me. Charges will appear from theweightlossadvocates.com.
                                                   <br><br>
                                                   <input type="checkbox" name="acknowledge_1" value="yes" checked required> I confirm that I understand <strong>I will need to upload a valid photo ID</strong> for my doctor to verify my identity and prescribe medication in compliance with federal law.</span>
                                        </div>
                                    </div>

                                    <div class="d-grid gap-2">
                                        <button class="btn ctaBtn1 btnsubmit" type="submit">
                                            Continue
                                        </button>
                                    </div>
                                    <br>
                                    <center><img src="../assets/img_from_site/securicons.png" class="img-fluid"></center>
                                    <br>
                                    <hr>

                                    <div>
                                        <div><i class="bi bi-ban icopk"></i> No Monthly Membership Fees</div>
                                        <div><i class="bi bi-ban icopk"></i> No Insurance Required</div>
                                        <div><i class="bi bi-ban icopk"></i> No Monthly Access Fees</div>
                                        <div><i class="bi bi-check icopk"></i> HSA Accepted</div>                                        <div><i class="bi bi-check icopk"></i> Includes Medication & Telemed Visits</div>
                                        <div><i class="bi bi-check icopk"></i> Price Lock Guarantee</div>
                                        <div><i class="bi bi-check icopk"></i> Patient Satisfaction Guarantee</div>
                                        <div><i class="bi bi-check icopk"></i> All Medications Compounded in the USA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <section class="container">
                            <div class="row">
                                <div class="col-xl-6 offset-xl-3">
                                    <center>
                                        <div class="spacer">&nbsp;</div>
                                        <div class="col-sm-12 rating-wht">
                                            <strong>4.8</strong> <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><br>
                                            <span style="font-size:12px;">Rated for all-inclusive pricing, delivery & effectiveness.</span>
                                            <br><br>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
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
                                <p class="textalt2" style="font-size:12px;">Your satisfaction and success are our priority. If you decide before your prescription ships that our program isn't for you, we'll cancel your order and provide a full refund. While we cannot process refunds once your prescription has been shipped, our expert staff has lots of options at their disposal to help you hit your weightloss goal and you can cancel future shipments at any time. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="https://js.stripe.com/v3/"></script>
<script src="../assets/js_from_site/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // --- Card Validation Functions ---
    
    // Luhn Algorithm for credit card validation
    function luhnCheck(cardNumber) {
        let sum = 0;
        let isEven = false;
        
        for (let i = cardNumber.length - 1; i >= 0; i--) {
            let digit = parseInt(cardNumber[i]);
            
            if (isEven) {
                digit *= 2;
                if (digit > 9) {
                    digit -= 9;
                }
            }
            
            sum += digit;
            isEven = !isEven;
        }
        
        return sum % 10 === 0;
    }
    
    // Detect card type and validate length
    function getCardType(number) {
        const patterns = {
            visa: /^4[0-9]{0,15}$/,
            mastercard: /^(5[1-5]|2[2-7])[0-9]{0,14}$/,
            amex: /^3[47][0-9]{0,13}$/,
            discover: /^6(?:011|5[0-9]{2})[0-9]{0,12}$/,
            diners: /^3(?:0[0-5]|[68][0-9])[0-9]{0,11}$/,
            jcb: /^(?:2131|1800|35\d{3})\d{0,11}$/
        };
        
        for (let type in patterns) {
            if (patterns[type].test(number)) {
                return type;
            }
        }
        return null;
    }
    
    function getMaxLength(cardType) {
        const lengths = {
            visa: 16,
            mastercard: 16,
            amex: 15,
            discover: 16,
            diners: 14,
            jcb: 16
        };
        return lengths[cardType] || 16;
    }
    
    function validateCardNumber(cardNumber) {
        const cleanNumber = cardNumber.replace(/\s/g, '');
        
        if (cleanNumber.length === 0) {
            return { valid: false, message: '' };
        }
        
        if (!/^\d+$/.test(cleanNumber)) {
            return { valid: false, message: 'Card number must contain only digits' };
        }
        
        const cardType = getCardType(cleanNumber);
        if (!cardType) {
            return { valid: false, message: 'Invalid card type' };
        }
        
        const maxLength = getMaxLength(cardType);
        if (cleanNumber.length < maxLength) {
            return { valid: false, message: '' };
        }
        
        if (cleanNumber.length > maxLength) {
            return { valid: false, message: 'Card number is too long' };
        }
        
        if (!luhnCheck(cleanNumber)) {
            return { valid: false, message: 'Invalid card number' };
        }
        
        return { valid: true, message: '' };
    }
    
    function validateExpiry(expiry) {
        if (!expiry || expiry.length === 0) {
            return { valid: false, message: '' };
        }
        
        const parts = expiry.split(' / ');
        if (parts.length !== 2) {
            return { valid: false, message: 'Invalid format' };
        }
        
        const month = parseInt(parts[0]);
        const year = parseInt('20' + parts[1]);
        
        if (isNaN(month) || isNaN(year)) {
            return { valid: false, message: 'Invalid date' };
        }
        
        if (month < 1 || month > 12) {
            return { valid: false, message: 'Invalid month' };
        }
        
        const now = new Date();
        const currentYear = now.getFullYear();
        const currentMonth = now.getMonth() + 1;
        
        if (year < currentYear || (year === currentYear && month < currentMonth)) {
            return { valid: false, message: 'Card has expired' };
        }
        
        if (year > currentYear + 20) {
            return { valid: false, message: 'Invalid expiry year' };
        }
        
        return { valid: true, message: '' };
    }
    
    function validateCVC(cvc, cardType) {
        if (!cvc || cvc.length === 0) {
            return { valid: false, message: '' };
        }
        
        if (!/^\d+$/.test(cvc)) {
            return { valid: false, message: 'CVC must be numeric' };
        }
        
        const requiredLength = cardType === 'amex' ? 4 : 3;
        
        if (cvc.length < requiredLength) {
            return { valid: false, message: '' };
        }
        
        if (cvc.length !== requiredLength) {
            return { valid: false, message: `CVC must be ${requiredLength} digits` };
        }
        
        return { valid: true, message: '' };
    }
    
    function showError(input, errorElement, message) {
        input.classList.add('is-invalid');
        input.classList.remove('is-valid');
        errorElement.textContent = message;
        errorElement.classList.add('show');
    }
    
    function showSuccess(input, errorElement) {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
        errorElement.textContent = '';
        errorElement.classList.remove('show');
    }
    
    function clearValidation(input, errorElement) {
        input.classList.remove('is-invalid');
        input.classList.remove('is-valid');
        errorElement.textContent = '';
        errorElement.classList.remove('show');
    }

    // --- Custom Stripe.js Integration for Separate Fields ---

    <?php
        $gateways = WC()->payment_gateways->get_available_payment_gateways();
        $stripe_gateway = $gateways['stripe'] ?? null;
        $publishable_key = '';
        if ($stripe_gateway) {
            $test_mode = $stripe_gateway->get_option('testmode') === 'yes';
            if ($test_mode) {
                $publishable_key = $stripe_gateway->get_option('test_publishable_key');
            } else {
                $publishable_key = $stripe_gateway->get_option('publishable_key');
            }
        }
    ?>
    var stripe = Stripe('<?php echo esc_js($publishable_key); ?>');

    var form = document.getElementById('ccForm');
    var errorElement = document.getElementById('card-errors');
    
    const cardNumberInput = document.getElementById('stripe-card-number');
    const cardExpiryInput = document.getElementById('stripe-card-expiry');
    const cardCvcInput = document.getElementById('stripe-card-cvc');
    
    const cardNumberError = document.getElementById('card-number-error');
    const cardExpiryError = document.getElementById('card-expiry-error');
    const cardCvcError = document.getElementById('card-cvc-error');

    // --- Input Formatting and Real-time Validation ---
    
    // Format and validate card number
    cardNumberInput.addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        const cardType = getCardType(value);
        const maxLength = getMaxLength(cardType);
        
        // Limit to max length
        if (value.length > maxLength) {
            value = value.substring(0, maxLength);
        }
        
        // Format with spaces
        let formattedValue = '';
        for (let i = 0; i < value.length; i++) {
            if (i > 0 && i % 4 === 0) {
                formattedValue += ' ';
            }
            formattedValue += value[i];
        }
        e.target.value = formattedValue.trim();
        
        // Validate
        const validation = validateCardNumber(e.target.value);
        if (e.target.value.replace(/\s/g, '').length === 0) {
            clearValidation(e.target, cardNumberError);
        } else if (validation.valid) {
            showSuccess(e.target, cardNumberError);
        } else if (validation.message) {
            showError(e.target, cardNumberError, validation.message);
        } else {
            clearValidation(e.target, cardNumberError);
        }
    });
    
    cardNumberInput.addEventListener('blur', function (e) {
        const validation = validateCardNumber(e.target.value);
        if (e.target.value.length > 0 && !validation.valid && validation.message) {
            showError(e.target, cardNumberError, validation.message);
        }
    });

    // Format and validate expiry date
    cardExpiryInput.addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        
        // Limit to 4 digits
        if (value.length > 4) {
            value = value.substring(0, 4);
        }
        
        // Auto-format as MM / YY
        if (value.length >= 2) {
            value = value.substring(0, 2) + ' / ' + value.substring(2, 4);
        }
        e.target.value = value;
        
        // Validate
        if (value.length === 7) {
            const validation = validateExpiry(value);
            if (validation.valid) {
                showSuccess(e.target, cardExpiryError);
            } else {
                showError(e.target, cardExpiryError, validation.message);
            }
        } else if (value.length === 0) {
            clearValidation(e.target, cardExpiryError);
        } else {
            clearValidation(e.target, cardExpiryError);
        }
    });
    
    cardExpiryInput.addEventListener('blur', function (e) {
        const validation = validateExpiry(e.target.value);
        if (e.target.value.length > 0 && !validation.valid && validation.message) {
            showError(e.target, cardExpiryError, validation.message);
        }
    });

    // Format and validate CVC
    cardCvcInput.addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        const cardNumber = cardNumberInput.value.replace(/\s/g, '');
        const cardType = getCardType(cardNumber);
        const maxLength = cardType === 'amex' ? 4 : 3;
        
        // Limit length
        value = value.substring(0, maxLength);
        e.target.value = value;
        
        // Validate
        const validation = validateCVC(value, cardType);
        if (value.length === 0) {
            clearValidation(e.target, cardCvcError);
        } else if (validation.valid) {
            showSuccess(e.target, cardCvcError);
        } else if (validation.message) {
            showError(e.target, cardCvcError, validation.message);
        } else {
            clearValidation(e.target, cardCvcError);
        }
    });
    
    cardCvcInput.addEventListener('blur', function (e) {
        const cardNumber = cardNumberInput.value.replace(/\s/g, '');
        const cardType = getCardType(cardNumber);
        const validation = validateCVC(e.target.value, cardType);
        if (e.target.value.length > 0 && !validation.valid && validation.message) {
            showError(e.target, cardCvcError, validation.message);
        }
    });

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Clear previous errors
        errorElement.textContent = '';
        errorElement.classList.remove('show');
        
        // Validate all fields
        const cardNumber = cardNumberInput.value;
        const cardExpiry = cardExpiryInput.value;
        const cardCvc = cardCvcInput.value;
        
        const cardNumberValidation = validateCardNumber(cardNumber);
        const expiryValidation = validateExpiry(cardExpiry);
        const cardType = getCardType(cardNumber.replace(/\s/g, ''));
        const cvcValidation = validateCVC(cardCvc, cardType);
        
        let hasErrors = false;
        
        if (!cardNumberValidation.valid) {
            showError(cardNumberInput, cardNumberError, cardNumberValidation.message || 'Please enter a valid card number');
            hasErrors = true;
        }
        
        if (!expiryValidation.valid) {
            showError(cardExpiryInput, cardExpiryError, expiryValidation.message || 'Please enter a valid expiry date');
            hasErrors = true;
        }
        
        if (!cvcValidation.valid) {
            showError(cardCvcInput, cardCvcError, cvcValidation.message || 'Please enter a valid CVC');
            hasErrors = true;
        }
        
        if (hasErrors) {
            return;
        }
        
        form.querySelector('button').disabled = true;

        // Parse expiry date
        var expiryParts = cardExpiry.split(' / ');
        var exp_month = expiryParts[0] || '';
        var exp_year = expiryParts[1] || '';

        stripe.createPaymentMethod({
            type: 'card',
            card: {
                number: cardNumber.replace(/\s/g, ''),
                cvc: cardCvc,
                exp_month: parseInt(exp_month),
                exp_year: parseInt(exp_year),
            },
            billing_details: {
                name: '<?php echo esc_js(($shipping_firstname ?? '') . ' ' . ($shipping_lastname ?? '')); ?>',
                email: '<?php echo esc_js($shipping_email ?? ''); ?>',
            },
        }).then(function(result) {
            if (result.error) {
                // Show error to your customer
                errorElement.textContent = result.error.message;
                errorElement.classList.add('show');
                form.querySelector('button').disabled = false;
            } else {
                // Send the payment method ID to your server
                stripeTokenHandler(result.paymentMethod);
            }
        });
    });

    function stripeTokenHandler(paymentMethod) {
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'payment_method');
        hiddenInput.setAttribute('value', paymentMethod.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }
});
</script>
</body>
</html>