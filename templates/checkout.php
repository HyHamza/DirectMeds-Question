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
                                            <label for="ccnumber">Card Number</label><br>
                                            <input type="tel" name="ccnumber" required id="CreditCardNumber"
                                                   alt="Credit Card Number"
                                                   value=""
                                                   data-validation="required"
                                                   class="form-control required" placeholder="••••••••••••••••"
                                                   maxlength="16"/>
                                        </div>
                                        <div class="col">
                                            <label for="billing_cardexp_month">Exp Month</label><br>
                                            <select name="billing_cardexp_month" id="ExpMonth"
                                                    class=" form-control  input-lg required">
                                                                                                    <option value="01" >
                                                        01 - January                                                    </option>
                                                                                                    <option value="02" >
                                                        02 - February                                                    </option>
                                                                                                    <option value="03" >
                                                        03 - March                                                    </option>
                                                                                                    <option value="04" >
                                                        04 - April                                                    </option>
                                                                                                    <option value="05" >
                                                        05 - May                                                    </option>
                                                                                                    <option value="06" >
                                                        06 - June                                                    </option>
                                                                                                    <option value="07" >
                                                        07 - July                                                    </option>
                                                                                                    <option value="08" >
                                                        08 - August                                                    </option>
                                                                                                    <option value="09" >
                                                        09 - September                                                    </option>
                                                                                                    <option value="10" >
                                                        10 - October                                                    </option>
                                                                                                    <option value="11" >
                                                        11 - November                                                    </option>
                                                                                                    <option value="12" >
                                                        12 - December                                                    </option>
                                                                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="billing_cardexp_year">Exp Year</label><br>
                                            <select alt="Exp Year" name="billing_cardexp_year" id="ExpYear" required
                                                    class="form-control  input-lg  required">
                                                                                                    <option value="2025" >2025</option>
                                                                                                    <option value="2026" >2026</option>
                                                                                                    <option value="2027" >2027</option>
                                                                                                    <option value="2028" >2028</option>
                                                                                                    <option value="2029" >2029</option>
                                                                                                    <option value="2030" >2030</option>
                                                                                                    <option value="2031" >2031</option>
                                                                                                    <option value="2032" >2032</option>
                                                                                                    <option value="2033" >2033</option>
                                                                                                    <option value="2034" >2034</option>
                                                                                                    <option value="2035" >2035</option>
                                                                                                    <option value="2036" >2036</option>
                                                                                                    <option value="2037" >2037</option>
                                                                                                    <option value="2038" >2038</option>
                                                                                                    <option value="2039" >2039</option>
                                                                                                    <option value="2040" >2040</option>
                                                                                            </select>
                                        </div>
                                        <input type="hidden" name="ccexp" id="ccexp" value="">
                                    </div>
                                    <div class="row d-flex mb-3">
                                        <div class="col-4 col-sm-3">
                                            <label for="cvv">Cvv</label><br>
                                            <input type="text"
                                                   alt="CVV"
                                                   class="form-control ub-input-item single text form_elem_first_name required"
                                                   maxlength="4"
                                                   required name="cvv"
                                                   value=""
                                                   placeholder="&bull;&bull;&bull;" data-toggle="tooltip"
                                                   data-placement="auto left"
                                                   title="CVV" data-validation="required"
                                            >
                                        </div>
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
                                        <button class="btn ctaBtn1 btnsubmit">
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
        OSForm.cardFormatter()
        OSForm.prefetchGateway('prefetch-gateway.php', (productArray, body) => {
    if (productArray.length === 0) {
        return;
    }

    body.append(`product`, productArray[0]);
})    });
</script>
<script src="../assets/js_from_site/checkout.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const expMonthEl = document.getElementById('ExpMonth');
        const expYearEl = document.getElementById('ExpYear');
        const ccexpEl = document.getElementById('ccexp');

        function updateCcexp() {
            const month = expMonthEl.value;
            const year = expYearEl.value.slice(-2); // Get last two digits of the year
            ccexpEl.value = month + year;
        }

        expMonthEl.addEventListener('change', updateCcexp);
        expYearEl.addEventListener('change', updateCcexp);

        // Initial update
        updateCcexp();
    });
</script>
</body>
</html>