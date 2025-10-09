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
                                            <label for="nmi-card-number">Card Number</label><br>
                                            <input type="tel" name="nmi-card-number" required id="nmi-card-number"
                                                   alt="Credit Card Number"
                                                   data-validation="required"
                                                   class="form-control required" placeholder="•••• •••• •••• ••••"
                                                   />
                                            <div class="error-message" id="card-number-error"></div>
                                        </div>
                                        <div class="col-8">
                                            <label for="nmi-card-expiry">Expiration</label><br>
                                            <input type="tel" name="nmi-card-expiry" required id="nmi-card-expiry"
                                                   alt="Expiration"
                                                   data-validation="required"
                                                   class="form-control required" placeholder="MM / YY"
                                                   />
                                            <div class="error-message" id="card-expiry-error"></div>
                                        </div>
                                        <div class="col-4">
                                            <label for="nmi-card-cvc">CVC</label><br>
                                            <input type="tel" name="nmi-card-cvc" required id="nmi-card-cvc"
                                                   alt="CVC"
                                                   data-validation="required"
                                                   class="form-control required" placeholder="•••"
                                                   />
                                            <div class="error-message" id="card-cvc-error"></div>
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
<script src="../assets/js_from_site/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

<script>
    window.addEventListener('DOMContentLoaded', function () {
        if (typeof OSForm !== 'undefined') {
            OSForm.cardFormatter();
            OSForm.prefetchGateway('prefetch-gateway.php', (productArray, body) => {
                if (productArray.length === 0) {
                    return;
                }
                body.append(`product`, productArray[0]);
            });
        }
    });
</script>
<script src="../assets/js_from_site/checkout.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const cardNumberInput = document.getElementById('nmi-card-number');
    const cardExpiryInput = document.getElementById('nmi-card-expiry');
    const cardCvcInput = document.getElementById('nmi-card-cvc');
    const form = document.getElementById('ccForm');
    
    const cardNumberError = document.getElementById('card-number-error');
    const cardExpiryError = document.getElementById('card-expiry-error');
    const cardCvcError = document.getElementById('card-cvc-error');

    // Luhn Algorithm for card validation
    function luhnCheck(cardNumber) {
        const digits = cardNumber.replace(/\D/g, '');
        let sum = 0;
        let isEven = false;
        
        for (let i = digits.length - 1; i >= 0; i--) {
            let digit = parseInt(digits[i]);
            
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

    // Detect card type
    function getCardType(number) {
        const patterns = {
            visa: /^4/,
            mastercard: /^5[1-5]/,
            amex: /^3[47]/,
            discover: /^6(?:011|5)/,
            diners: /^3(?:0[0-5]|[68])/,
            jcb: /^35/
        };
        
        const cleaned = number.replace(/\D/g, '');
        
        for (const [type, pattern] of Object.entries(patterns)) {
            if (pattern.test(cleaned)) {
                return type;
            }
        }
        
        return 'unknown';
    }

    // Get expected card length
    function getCardLength(type) {
        const lengths = {
            visa: 16,
            mastercard: 16,
            amex: 15,
            discover: 16,
            diners: 14,
            jcb: 16
        };
        return lengths[type] || 16;
    }

    // Get expected CVC length
    function getCvcLength(type) {
        return type === 'amex' ? 4 : 3;
    }

    // Validate card number
    function validateCardNumber() {
        const value = cardNumberInput.value.replace(/\D/g, '');
        const cardType = getCardType(value);
        const expectedLength = getCardLength(cardType);
        
        cardNumberInput.classList.remove('is-valid', 'is-invalid');
        cardNumberError.classList.remove('show');
        
        if (value.length === 0) {
            return false;
        }
        
        if (value.length < 13) {
            cardNumberInput.classList.add('is-invalid');
            cardNumberError.textContent = 'Card number is too short';
            cardNumberError.classList.add('show');
            return false;
        }
        
        if (value.length > 19) {
            cardNumberInput.classList.add('is-invalid');
            cardNumberError.textContent = 'Card number is too long';
            cardNumberError.classList.add('show');
            return false;
        }
        
        if (cardType === 'unknown') {
            cardNumberInput.classList.add('is-invalid');
            cardNumberError.textContent = 'Card type not recognized';
            cardNumberError.classList.add('show');
            return false;
        }
        
        if (value.length !== expectedLength) {
            cardNumberInput.classList.add('is-invalid');
            cardNumberError.textContent = `${cardType.charAt(0).toUpperCase() + cardType.slice(1)} card must be ${expectedLength} digits`;
            cardNumberError.classList.add('show');
            return false;
        }
        
        if (!luhnCheck(value)) {
            cardNumberInput.classList.add('is-invalid');
            cardNumberError.textContent = 'Invalid card number';
            cardNumberError.classList.add('show');
            return false;
        }
        
        cardNumberInput.classList.add('is-valid');
        return true;
    }

    // Validate expiry date
    function validateExpiry() {
        const value = cardExpiryInput.value.replace(/\D/g, '');
        
        cardExpiryInput.classList.remove('is-valid', 'is-invalid');
        cardExpiryError.classList.remove('show');
        
        if (value.length === 0) {
            return false;
        }
        
        if (value.length < 4) {
            cardExpiryInput.classList.add('is-invalid');
            cardExpiryError.textContent = 'Expiry date incomplete';
            cardExpiryError.classList.add('show');
            return false;
        }
        
        const month = parseInt(value.substring(0, 2));
        const year = parseInt('20' + value.substring(2, 4));
        
        if (month < 1 || month > 12) {
            cardExpiryInput.classList.add('is-invalid');
            cardExpiryError.textContent = 'Invalid month (01-12)';
            cardExpiryError.classList.add('show');
            return false;
        }
        
        const now = new Date();
        const currentYear = now.getFullYear();
        const currentMonth = now.getMonth() + 1;
        
        if (year < currentYear || (year === currentYear && month < currentMonth)) {
            cardExpiryInput.classList.add('is-invalid');
            cardExpiryError.textContent = 'Card has expired';
            cardExpiryError.classList.add('show');
            return false;
        }
        
        if (year > currentYear + 20) {
            cardExpiryInput.classList.add('is-invalid');
            cardExpiryError.textContent = 'Invalid expiry year';
            cardExpiryError.classList.add('show');
            return false;
        }
        
        cardExpiryInput.classList.add('is-valid');
        return true;
    }

    // Validate CVC
    function validateCvc() {
        const value = cardCvcInput.value.replace(/\D/g, '');
        const cardNumber = cardNumberInput.value.replace(/\D/g, '');
        const cardType = getCardType(cardNumber);
        const expectedLength = getCvcLength(cardType);
        
        cardCvcInput.classList.remove('is-valid', 'is-invalid');
        cardCvcError.classList.remove('show');
        
        if (value.length === 0) {
            return false;
        }
        
        if (value.length < 3) {
            cardCvcInput.classList.add('is-invalid');
            cardCvcError.textContent = 'CVC is too short';
            cardCvcError.classList.add('show');
            return false;
        }
        
        if (value.length !== expectedLength) {
            cardCvcInput.classList.add('is-invalid');
            cardCvcError.textContent = `CVC must be ${expectedLength} digits`;
            cardCvcError.classList.add('show');
            return false;
        }
        
        cardCvcInput.classList.add('is-valid');
        return true;
    }

    // Format card number with spaces every 4 digits
    cardNumberInput.addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        
        // Limit to 19 digits (longest card number)
        value = value.substring(0, 19);
        
        let formattedValue = '';
        for (let i = 0; i < value.length; i++) {
            if (i > 0 && i % 4 === 0) {
                formattedValue += ' ';
            }
            formattedValue += value[i];
        }
        e.target.value = formattedValue.trim();
    });

    // Format expiry date as MM / YY
    cardExpiryInput.addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        
        // Limit to 4 digits
        value = value.substring(0, 4);
        
        if (value.length > 2) {
            value = value.substring(0, 2) + ' / ' + value.substring(2, 4);
        }
        e.target.value = value;
    });

    // Limit CVC based on card type
    cardCvcInput.addEventListener('input', function (e) {
        const cardNumber = cardNumberInput.value.replace(/\D/g, '');
        const cardType = getCardType(cardNumber);
        const maxLength = getCvcLength(cardType);
        
        e.target.value = e.target.value.replace(/\D/g, '').substring(0, maxLength);
    });

    // Validate on blur
    cardNumberInput.addEventListener('blur', validateCardNumber);
    cardExpiryInput.addEventListener('blur', validateExpiry);
    cardCvcInput.addEventListener('blur', validateCvc);

    // Real-time validation while typing (after first blur)
    let cardNumberTouched = false;
    let cardExpiryTouched = false;
    let cardCvcTouched = false;

    cardNumberInput.addEventListener('blur', function() {
        cardNumberTouched = true;
    });
    cardExpiryInput.addEventListener('blur', function() {
        cardExpiryTouched = true;
    });
    cardCvcInput.addEventListener('blur', function() {
        cardCvcTouched = true;
    });

    cardNumberInput.addEventListener('input', function() {
        if (cardNumberTouched) {
            validateCardNumber();
        }
    });
    cardExpiryInput.addEventListener('input', function() {
        if (cardExpiryTouched) {
            validateExpiry();
        }
    });
    cardCvcInput.addEventListener('input', function() {
        if (cardCvcTouched) {
            validateCvc();
        }
    });

    // Form submission validation
    form.addEventListener('submit', function(e) {
        const isCardValid = validateCardNumber();
        const isExpiryValid = validateExpiry();
        const isCvcValid = validateCvc();
        
        if (!isCardValid || !isExpiryValid || !isCvcValid) {
            e.preventDefault();
            
            // Scroll to first error
            if (!isCardValid) {
                cardNumberInput.focus();
            } else if (!isExpiryValid) {
                cardExpiryInput.focus();
            } else if (!isCvcValid) {
                cardCvcInput.focus();
            }
            
            return false;
        }
    });
});
</script>
</body>
</html>