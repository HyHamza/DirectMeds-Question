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
    <script src="../assets/js_from_site/confetti.bundle.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../assets/css_from_site/utils.min.css">
    <script type="text/javascript" src="../assets/js_from_site/everflow.js"></script>
<script src="../assets/js_from_site/smartlook.js"></script>
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
    _paq.push(["setCookieDomain", "*.theweightlossadvocates.com"]);
    _paq.push(["setDomains", ["*.theweightlossadvocates.com","*.app.theweightlossadvocates.com"]]);
                _paq.push(['setCustomDimension', 4, 'cid-68e34489de137c9b2f02b06e51d626a3']);    _paq.push(["enableCrossDomainLinking"]);
    _paq.push(["setExcludedQueryParams", ["\/admin"]]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    
</script>
 

        <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'aff_id': '',
            'source_id': '',
            'oid': '',
            'uid': '',
            'converted': '',
            'ip_address': '34.46.237.233',
            'user_agent': 'curl/8.5.0',
            'customer_id': 'cid-68e34489de137c9b2f02b06e51d626a3',
            'last_touch_channel': '',
            'offer_slug': 'dm-offers',
            'page': 'checkout'
        });
        </script>
          
<!-- End Google Tag Manager -->
<script>
    var fbBrowserIdAttempt = 0;
    function storeFBBrowserIdOnServer() {
        fbBrowserIdAttempt++;
        if (fbBrowserIdAttempt == 10) {
            return;
        }
        var browserId = getCookie('_fbp');
        if (document.body == null) {
            document.addEventListener("DOMContentLoaded", function() {
                setTimeout(storeFBBrowserIdOnServer,500);
            });
            return;
        } else if (browserId == null) {
            setTimeout(storeFBBrowserIdOnServer,500);
            return;
        }

        if (browserId != "" && browserId != null && browserId != undefined) {
            var url = new URL(window.location.href);
            var img = document.createElement('img');
            var pathname = url.pathname.split("/").filter((value) => value)[0] ?? '';
            if (pathname != "") {
                pathname = pathname + '/';
            }
            if (pathname.indexOf('.php') > -1) {
                pathname = '';
            }
            img.src = url.origin + '/' + pathname + 'storeTransId.php?fb_browser_id=' + browserId;
            img.style.visibility = 'hidden';
            img.style.height = '0px';
            img.style.width = '0px';
            document.body.appendChild(img);
        }
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var cookies = document.cookie.split(';');

        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            while (cookie.charAt(0) === ' ') {
                cookie = cookie.substring(1);
            }
            if (cookie.indexOf(nameEQ) === 0) {
                return cookie.substring(nameEQ.length, cookie.length);
            }
        }

        return null;
    }
</script>
        <style>
        @font-face {
            font-family: 'InterNew';
            src: url('https://res.cloudinary.com/spiralyze/raw/upload/v1723652652/FONTS/InterNew/Inter-Regular.ttf');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'InterNew';
            src: url('https://res.cloudinary.com/spiralyze/raw/upload/v1723652652/FONTS/InterNew/Inter-Medium.ttf');
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'InterNew';
            src: url('https://res.cloudinary.com/spiralyze/raw/upload/v1723652651/FONTS/InterNew/Inter-Bold.ttf');
            font-weight: 700;
            font-style: normal;
        }

        .timer-container {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #013468;
            color: #fff;
            font-size: 16px;
            line-height: 24px;
            font-weight: 600;
            padding: 12px 16px 12px 15px;
            height: 61px;
            gap: 12px;
        }

        .discount-text strong {
            color: #FFD991;
            font-weight: 600;
        }

        .timer {
            border-radius: 8px;
            background: rgba(0, 17, 52, 0.50);
            color: #FFF;
            text-align: center;
            leading-trim: both;
            text-edge: cap;
            font-family: "InterNew";
            font-size: 18px;
            font-style: normal;
            font-weight: 600;
            line-height: 140%;
            color: #385375;
            width: 91px;
            height: 37px;
            display: flex;
            align-items: center;
            padding: 0 11px 3px;
        }

        .timer span {
            color: #FFF;
        }

        .timer span:first-child {
            margin-right: 7px;
            margin-top: 3px;
        }

        .timer span:last-child {
            margin-left: 7px;
            margin-top: 3px;
        }
        .discount-text-mobile {
            display: none;
        }
        @media(max-width: 1023.98px){
            .timer-container {
                gap: 24px !important;
            }

        }
        @media screen and (max-width: 767.98px) {
            .discount-text {
                display: none !important;
            }
            .discount-text-mobile {
                display: block !important;
            }
            .navbar {
                padding: 12px 0 16px;
            }

            .questions-stage {
                overflow: hidden;
            }

            .timer-container {
                justify-content: space-between;
                font-size: 14px;
                line-height: 22px;
                padding: 12px 16px 12px 16px;
                gap: 49px !important;
            }

            .discount-text strong {
                font-weight: 800;
            }
        }
    </style>
    <script>
        (function () {
            var elemWaitnew = setInterval(() => {
                if (document.querySelector('nav')) {
                    clearInterval(elemWaitnew);

                    document.querySelector('nav').insertAdjacentHTML('beforebegin', `
                        <div class="timerContainer">
                            <div class="timer-container">
                                <span class="discount-text">Your up to <strong>$100 off</strong> discount has been applied!</span>
                                <span class="discount-text discount-text-mobile">Your up to <strong>$100 off</strong> discount has been applied!</span>
                                <span class="timer"><span id="minutes">10</span> : <span id="seconds">00</span></span>
                            </div>
                        </div>
                    `);

                    function startCountdown(durationInMinutes) {
                        let endTime = localStorage.getItem('endTime');
                        let timerExpired = localStorage.getItem('timerExpired');

                        if (timerExpired === "true") {
                            document.getElementById("minutes").textContent = "00";
                            document.getElementById("seconds").textContent = "00";
                            return;
                        }

                        if (!endTime) {
                            endTime = Date.now() + durationInMinutes * 60 * 1000;
                            localStorage.setItem('endTime', endTime);
                        } else {
                            endTime = parseInt(endTime, 10);
                        }

                        const minutesElement = document.getElementById("minutes");
                        const secondsElement = document.getElementById("seconds");

                        function updateTimer() {
                            const remainingTime = Math.max(0, endTime - Date.now());
                            const minutes = Math.floor(remainingTime / 60000);
                            const seconds = Math.floor((remainingTime % 60000) / 1000);

                            minutesElement.textContent = minutes.toString().padStart(2, '0');
                            secondsElement.textContent = seconds.toString().padStart(2, '0');

                            if (remainingTime > 0) {
                                requestAnimationFrame(updateTimer);
                            } else {
                                minutesElement.textContent = "00";
                                secondsElement.textContent = "00";
                                localStorage.setItem('timerExpired', "true"); // Prevent resetting on navigation
                            }
                        }
                        updateTimer();
                    }
                    startCountdown(10);
                }
            });
        })();
    </script>
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
                                    <img src="../assets/img_from_site/select-product0.png" class="img-fluid">
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
                                    <h4><b style="font-size:1.5rem;">$297.00</b></h4>
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
                                            <label for="billing_cardnumber">Card Number</label><br>
                                            <input type="tel" name="billing_cardnumber" required id="CreditCardNumber"
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
                                    </div>
                                    <div class="row d-flex mb-3">
                                        <div class="col-4 col-sm-3">
                                            <label for="billing_cardcvv">Cvv</label><br>
                                            <input type="text"
                                                   alt="CVV"
                                                   class="form-control ub-input-item single text form_elem_first_name required"
                                                   maxlength="4"
                                                   required name="billing_cardcvv"
                                                   value=""
                                                   placeholder="&bull;&bull;&bull;" data-toggle="tooltip"
                                                   data-placement="auto left"
                                                   title="First Name" data-validation="required"
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
    <div class="footer-badge"><a href="https://www.legitscript.com/websites/?checker_keywords=theweightlossadvocates.com" target="_blank" title="Verify LegitScript Approval for www.theweightlossadvocates.com"><img src="../assets/img_from_site/183773.png" alt="Verify Approval for www.theweightlossadvocates.com" width="73" height="79" /></a></div><div class="footer-badge" ><a href="https://cardinsight.com" target="_blank" ><img src="img/ci-badge.png" class="img-fluid d-block mx-auto" style="max-width:150px;margin-top:40px;"></a></div><script>
    const intervalId = setInterval(() => {
        const el = document.querySelector('a[href^="https://www.legitscript.com"]');
        if (el) {
            el.style.target = '_blank';
            clearInterval(intervalId);
        }
    }, 100);
</script>
</form>
<script src="../assets/js_from_site/utils.min.js"></script>
<script>
    function startTimer(duration, display) {
        let timer = duration, minutes, seconds;
        setInterval(() => {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = 0;
            }
        }, 1000);
    }

    window.onload = () => {
        const tenMinutes = 60 * 10,
            display = document.querySelector('#timer');
        startTimer(tenMinutes, display);
    };


</script>
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

<script>
    /*! lozad.js - v1.5.0 - 2018-07-16 https://github.com/ApoorvSaxena/lozad.js Apoorv Saxena; Licensed MIT */
    !function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.lozad=e()}(this,function(){"use strict";function t(t){t.setAttribute("data-loaded",!0)}var e=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var r=arguments[e];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(t[n]=r[n])}return t},r=document.documentMode,n={rootMargin:"0px",threshold:0,load:function(t){if("picture"===t.nodeName.toLowerCase()){var e=document.createElement("img");r&&t.getAttribute("data-iesrc")&&(e.src=t.getAttribute("data-iesrc")),t.getAttribute("data-alt")&&(e.alt=t.getAttribute("data-alt")),t.appendChild(e)}t.getAttribute("data-src")&&(t.src=t.getAttribute("data-src")),t.getAttribute("data-srcset")&&(t.srcset=t.getAttribute("data-srcset")),t.getAttribute("data-background-image")&&(t.style.backgroundImage="url('"+t.getAttribute("data-background-image")+"')")},loaded:function(){}},o=function(t){return"true"===t.getAttribute("data-loaded")};return function(){var r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:".lozad",a=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},i=e({},n,a),d=i.rootMargin,u=i.threshold,c=i.load,s=i.loaded,g=void 0;return window.IntersectionObserver&&(g=new IntersectionObserver(function(e,r){return function(n,a){n.forEach(function(n){n.intersectionRatio>0&&(a.unobserve(n.target),o(n.target)||(e(n.target),t(n.target),r(n.target)))})}}(c,s),{rootMargin:d,threshold:u})),{observe:function(){for(var e=function(t){return t instanceof Element?[t]:t instanceof NodeList?t:document.querySelectorAll(t)}(r),n=0;n<e.length;n++)o(e[n])||(g?g.observe(e[n]):(c(e[n]),t(e[n]),s(e[n])))},triggerLoad:function(e){o(e)||(c(e),t(e),s(e))}}}});
</script>
<script>
    window.lazyLoad = lozad('.lazyload' );
    window.lazyLoad.observe();
</script><script>
    window.OfferConfig = {
        use_three_secure: true,
        show_three_secure_challenges: false,
    };
    window.cid = 'cid-68e34489de137c9b2f02b06e51d626a3';
</script>
<script>
        function setCountryState(map, country, name) {
        if (country != null && country.value != null && ['US', 'CA'].indexOf(country.value) !== -1) {
            var sSelects = document.getElementsByTagName('select');
            for (var ss = 0; ss < sSelects.length; ss++) {
                if (sSelects[ss].getAttribute('name') === (name + '_state')) {
                    var html = '<option value="" disabled selected> Select State/Province*</option>'
                    var sValue = sSelects[ss].getAttribute('data-value');
                    for (var code in map[country.value]) {
                        if (map[country.value].hasOwnProperty(code)) {
                            if (code === sValue) {
                                html += '<option value="' + code + '" selected>' + map[country.value][code] + '</option>'
                            } else {
                                html += '<option value="' + code + '">' + map[country.value][code] + '</option>'
                            }
                        }
                    }
                    sSelects[ss].innerHTML = html
                }
            }
        }
    }

    window.onload = function () {
        var map = {"US":{"AL":"Alabama","AK":"Alaska","AZ":"Arizona","AR":"Arkansas","CA":"California","CO":"Colorado","CT":"Connecticut","DE":"Delaware","DC":"District of Columbia","FL":"Florida","GA":"Georgia","HI":"Hawaii","ID":"Idaho","IL":"Illinois","IN":"Indiana","IA":"Iowa","KS":"Kansas","KY":"Kentucky","LA":"Louisiana","ME":"Maine","MD":"Maryland","MA":"Massachusetts","MI":"Michigan","MN":"Minnesota","MS":"Mississippi","MO":"Missouri","MT":"Montana","NE":"Nebraska","NV":"Nevada","NH":"New Hampshire","NJ":"New Jersey","NM":"New Mexico","NY":"New York","NC":"North Carolina","ND":"North Dakota","OH":"Ohio","OK":"Oklahoma","OR":"Oregon","PA":"Pennsylvania","RI":"Rhode Island","SC":"South Carolina","SD":"South Dakota","TN":"Tennessee","TX":"Texas","UT":"Utah","VT":"Vermont","VA":"Virginia","WA":"Washington","WV":"West Virginia","WI":"Wisconsin","WY":"Wyoming"},"CA":{"AB":"Alberta","BC":"British Columbia","MB":"Manitoba","NB":"New Brunswick","NL":"Newfoundland and Labrador","NT":"Northwest Territories","NS":"Nova Scotia","NU":"Nunavut","ON":"Ontario","PE":"Prince Edward Island","QC":"Quebec","SK":"Saskatchewan","YT":"Yukon Territory"},"FI":{"AL":"Ahvenanmaan l\u00e4\u00e4ni","ES":"Etel\u00e4-Suomen l\u00e4\u00e4ni","IS":"It\u00e4-Suomen l\u00e4\u00e4ni","LL":"Lapin l\u00e4\u00e4ni","LS":"L\u00e4nsi-Suomen l\u00e4\u00e4ni","OL":"Oulun l\u00e4\u00e4ni"},"NO":{"NO-01":"Ostfold","NO-02":"Akershus","NO-03":"Oslo","NO-04":"Hedmark","NO-05":"Oppland","NO-06":"Buskerud","NO-07":"Vestfold","NO-08":"Telemark","NO-09":"Aust-Agder","NO-10":"Vest-Agder","NO-11":"Rogaland","NO-12":"Hordaland","NO-14":"Sogn og Fjordane","NO-15":"M\u00f8re og Romsdal","NO-16":"S\u00f8r-Tr\u00f8ndelag","NO-17":"Nord-Tr\u00f8ndelag","NO-18":"Nordland","NO-19":"Troms","NO-20":"Finnmark","NO-21":"Svalbard (Arctic Region)","NO-22":"Jan Mayen (Arctic Region)"},"AU":{"NSW":"New South Wales","QLD":"Queensland","SA":"South Australia","TAS":"Tasmania","VIC":"Victoria","WA":"Western Australia"},"NL":{"DR":"Drenthe","FL":"Flevoland","FR":"Friesland","GE":"Gelderland","GR":"Groningen","LI":"Limburg","NB":"Noord-Brabant","NH":"Noord-Holland","OV":"Overijssel","UT":"Utrecht","ZE":"Zeeland","ZH":"Zuid-Holland"},"IT":{"AG":"Agrigento","AL":"Alessandria","AN":"Ancona","AO":"Aosta","AP":"Ascoli Piceno","AQ":"L'Aquila","AR":"Arezzo","AT":"Asti","AV":"Avellino","BA":"Bari","BG":"Bergamo","BI":"Biella","BL":"Belluno","BN":"Benevento","BO":"Bologna","BR":"Brindisi","BS":"Brescia","BT":"Barletta-Andria-Trani","BZ":"Bolzano","CA":"Cagliari","CB":"Campobasso","CE":"Caserta","CH":"Chieti","CI":"Carbonia-Iglesias","CL":"Caltanissetta","CN":"Cuneo","CO":"Como","CR":"Cremona","CS":"Cosenza","CT":"Catania","CZ":"Catanzaro","EN":"Enna","FE":"Ferrara","FG":"Foggia","FI":"Firenze","FC":"Forl\u00ec-Cesena","FM":"Fermo","FR":"Frosinone","GE":"Genova","GO":"Gorizia","GR":"Grosseto","IM":"Imperia","IS":"Isernia","KR":"Crotone","LC":"Lecco","LE":"Lecce","LI":"Livorno","LO":"Lodi","LT":"Latina","LU":"Lucca","MB":"Monza e Brianza","MC":"Macerata","ME":"Messina","MI":"Milano","MN":"Mantova","MO":"Modena","MS":"Massa-Carrara","MT":"Matera","NA":"Napoli","NO":"Novara","NU":"Nuoro","OG":"Ogliastra","OR":"Oristano","OT":"Olbia-Tempio","PA":"Palermo","PC":"Piacenza","PD":"Padova","PE":"Pescara","PG":"Perugia","PI":"Pisa","PN":"Pordenone","PO":"Prato","PR":"Parma","PU":"Pesaro e Urbino","PT":"Pistoia","PV":"Pavia","PZ":"Potenza","RA":"Ravenna","RC":"Reggio Calabria","RE":"Reggio Emilia","RG":"Ragusa","RI":"Rieti","RM":"Roma","RN":"Rimini","RO":"Rovigo","SA":"Salerno","SI":"Siena","SO":"Sondrio","SP":"La Spezia","SR":"Siracusa","SS":"Sassari","SV":"Savona","TA":"Taranto","TE":"Teramo","TN":"Trento","TO":"Torino","TP":"Trapani","TR":"Terni","TS":"Trieste","TV":"Treviso","UD":"Udine","VA":"Varese","VB":"Verbano-Cusio-Ossola","VC":"Vercelli","VE":"Venezia","VI":"Vicenza","VR":"Verona","VS":"Medio Campidano","VT":"Viterbo","VV":"Vibo Valentia"},"MX":{"AGU":"Aguascalientes","BCN":"Baja California","BCS":"Baja California Sur","CAM":"Campeche","CHH":"Chihuahua","CHP":"Chiapas","COA":"Coahuila","COL":"Colima","DIF":"Ciudad de M\u00e9xico","DUR":"Durango","GRO":"Guerrero","GUA":"Guanajuato","HID":"Hidalgo","JAL":"Jalisco","MEX":"M\u00e9xico","MIC":"Michoac\u00e1n","MOR":"Morelos","NAY":"Nayarit","NLE":"Nuevo Le\u00f3n","OAX":"Oaxaca","PUE":"Puebla","QUE":"Quer\u00e9taro","ROO":"Quintana Roo","SIN":"Sinaloa","SLP":"San Luis Potos\u00ed","SON":"Sonora","TAB":"Tabasco","TAM":"Tamaulipas","TLA":"Tlaxcala","VER":"Veracruz","YUC":"Yucat\u00e1n","ZAC":"Zacatecas"},"DE":{"BW":"Baden-W\u00fcrttemberg","BY":"Bayern","BE":"Berlin","BB":"Brandenburg","HB":"Bremen","HH":"Hamburg","HE":"Hessen","MV":"Mecklenburg-Vorpommern","NI":"Niedersachsen","NW":"Nordrhein-Westfalen","RP":"Rheinland-Pfalz","SL":"Saarland","SN":"Sachsen","ST":"Sachsen-Anhalt","SH":"Schleswig-Holstein","TH":"Th\u00fcringen"},"FR":{"01":"Ain","02":"Aisne","03":"Allier","04":"Alpes-de-Haute-Provence","05":"Hautes-Alpes","06":"Alpes-Maritimes","07":"Ard\u00e8che","08":"Ardennes","09":"Ari\u00e8ge","10":"Aube","11":"Aude","12":"Aveyron","13":"Bouches-du-Rh\u00f4ne","14":"Calvados","15":"Cantal","16":"Charente","17":"Charente-Maritime","18":"Cher","19":"Corr\u00e8ze","21":"C\u00f4te-d'Or","22":"C\u00f4tes-d'Armor","23":"Creuse","24":"Dordogne","25":"Doubs","26":"Dr\u00f4me","27":"Eure","28":"Eure-et-Loir","29":"Finist\u00e8re","2A":"Corse-du-Sud","2B":"Haute-Corse","30":"Gard","31":"Haute-Garonne","32":"Gers","33":"Gironde","34":"H\u00e9rault","35":"Ille-et-Vilaine","36":"Indre","37":"Indre-et-Loire","38":"Is\u00e8re","39":"Jura","40":"Landes","41":"Loir-et-Cher","42":"Loire","43":"Haute-Loire","44":"Loire-Atlantique","45":"Loiret","46":"Lot","47":"Lot-et-Garonne","48":"Loz\u00e8re","49":"Maine-et-Loire","50":"Manche","51":"Marne","52":"Haute-Marne","53":"Mayenne","54":"Meurthe-et-Moselle","55":"Meuse","56":"Morbihan","57":"Moselle","58":"Ni\u00e8vre","59":"Nord","60":"Oise","61":"Orne","62":"Pas-de-Calais","63":"Puy-de-D\u00f4me","64":"Pyr\u00e9n\u00e9es-Atlantiques","65":"Hautes-Pyr\u00e9n\u00e9es","66":"Pyr\u00e9n\u00e9es-Orientales","67":"Bas-Rhin","68":"Haut-Rhin","69":"Rh\u00f4ne","70":"Haute-Sa\u00f4ne","71":"Sa\u00f4ne-et-Loire","72":"Sarthe","73":"Savoie","74":"Haute-Savoie","75":"Paris","76":"Seine-Maritime","77":"Seine-et-Marne","78":"Yvelines","79":"Deux-S\u00e8vres","80":"Somme","81":"Tarn","82":"Tarn-et-Garonne","83":"Var","84":"Vaucluse","85":"Vend\u00e9e","86":"Vienne","87":"Haute-Vienne","88":"Vosges","89":"Yonne","90":"Territoire de Belfort","91":"Essonne","92":"Hauts-de-Seine","93":"Seine-Saint-Denis","94":"Val-de-Marne","95":"Val-d'Oise","NC":"Nouvelle-Cal\u00e9donie","PF":"Polyn\u00e9sie fran\u00e7aise","PM":"Saint-Pierre-et-Miquelon","TF":"Terres Australes Fran\u00e7aises","WF":"Wallis et Futuna","YT":"Mayotte"},"BE":{"BRU":"Brussels","VAN":"Antwerpen","VBR":"Vlaams Brabant","VLI":"Limburg","VOV":"Oost-Vlaanderen","VWV":"West-Vlaanderen","WBR":"Brabant Wallon","WHT":"Hainaut","WLG":"Li\u00e8ge","WLX":"Luxembourg","WNA":"Namur"},"ES":{"A":"Alicante\/Alacant","AB":"Albacete","AL":"Almer\u00eda","AV":"\u00c1vila","B":"Barcelona","BA":"Badajoz","BI":"Bizkaia","BU":"Burgos","C":"Coru\u00f1a, A","CA":"C\u00e1diz","CC":"C\u00e1ceres","CE":"Ceuta","CO":"C\u00f3rdoba","CR":"Ciudad Real","CS":"Castell\u00f3n\/Castell\u00f3","CU":"Cuenca","GC":"Palmas, Las","GI":"Girona","GR":"Granada","GU":"Guadalajara","H":"Huelva","HU":"Huesca","J":"Ja\u00e9n","L":"Lleida","LE":"Le\u00f3n","LO":"Rioja, La","LU":"Lugo","M":"Madrid","MA":"M\u00e1laga","ML":"Melilla","MU":"Murcia","NA":"Navarra","O":"Asturias","OR":"Ourense","P":"Palencia","PM":"Balears, Illes","PO":"Pontevedra","S":"Cantabria","SA":"Salamanca","SE":"Sevilla","SG":"Segovia","SO":"Soria","SS":"Gipuzkoa","T":"Tarragona","TE":"Teruel","TF":"Santa Cruz de Tenerife","TO":"Toledo","V":"Valencia\/Val\u00e8ncia","VA":"Valladolid","VI":"Araba\/\u00c1lava","Z":"Zaragoza","ZA":"Zamora"},"BR":{"AC":"Acre","AL":"Alagoas","AP":"Amap\u00e1","AM":"Amazonas","BA":"Bahia","CE":"Cear\u00e1","DF":"Distrito Federal","ES":"Esp\u00edrito Santo","GO":"Goi\u00e1s","MA":"Maranh\u00e3o","MT":"Mato Grosso","MS":"Mato Grosso do Sul","MG":"Minas Gerais","PA":"Par\u00e1","PB":"Para\u00edba","PR":"Paran\u00e1","PE":"Pernambuco","PI":"Piau\u00ed","RJ":"Rio de Janeiro","RN":"Rio Grande do Norte","RS":"Rio Grande do Sul","RO":"Rond\u00f4nia","RR":"Roraima","SC":"Santa Catarina","SP":"S\u00e3o Paulo","SE":"Sergipe","TO":"Tocantins"},"DK":{"015":"K\u00f8benhavn","020":"Frederiksborg","025":"Roskilde","030":"Vestsj\u00e6lland","035":"Storstr\u00f8m","040":"Bornholm","042":"Fyn","050":"S\u00f8nderjylland","055":"Ribe","060":"Vejle","065":"Ringk\u00f8bing","070":"\u00c5rhus","076":"Viborg","080":"Nordjylland","101":"K\u00f8benhavn City","147":"Frederiksberg City","81":"North Jutland","82":"Central Jutland","83":"South Denmark","84":"Capital","85":"Zeeland"},"IN":{"AN":"Andaman and Nicobar Islands","AP":"Andhra Pradesh","AR":"Arunachal Pradesh","AS":"Assam","BR":"Bihar","CH":"Chandigarh","CT":"Chhattisgarh","DN":"Dadra and Nagar Haveli and Daman and Diu","DL":"Delhi","GA":"Goa","GJ":"Gujarat","HR":"Haryana","HP":"Himachal Pradesh","JK":"Jammu and Kashmir","JH":"Jharkhand","KA":"Karnataka","KL":"Kerala","LD":"Lakshadweep","MP":"Madhya Pradesh","MH":"Maharashtra","MN":"Manipur","ML":"Meghalaya","MZ":"Mizoram","NL":"Nagaland","OR":"Odisha","PY":"Puducherry","PB":"Punjab","RJ":"Rajasthan","SK":"Sikkim","TN":"Tamil Nadu","TS":"Telangana","TR":"Tripura","UP":"Uttar Pradesh","UK":"Uttarakhand","WB":"West Bengal"},"ID":{"AC":"Aceh","SU":"Sumatra Utara","SB":"Sumatra Barat","RI":"Riau","JA":"Jambi","SS":"Sumatra Selatan","BE":"Bengkulu","LA":"Lampung","BB":"Kepulauan Bangka Belitung","KR":"Kepulauan Riau","JK":"Jakarta Raya","JB":"Jawa Barat","JT":"Jawa Tengah","JI":"Jawa Timur","YO":"Yogyakarta","BA":"Bali","NB":"Nusa Tenggara Barat","NT":"Nusa Tenggara Timur","KB":"Kalimantan Barat","KT":"Kalimantan Tengah","KI":"Kalimantan Timur","KS":"Kalimantan Selatan","KU":"Kalimantan Utara","SA":"Sulawesi Utara","ST":"Sulawesi Tengah","SG":"Sulawesi Selatan","SN":"Sulawesi Tenggara","GO":"Gorontalo","SR":"Sulawesi Barat","MA":"Maluku","MU":"Maluku Utara","PA":"Papua","PB":"Papua Barat"},"IE":{"C":"Cork","CE":"Clare","CN":"Cavan","CW":"Carlow","D":"Dublin","DL":"Donegal","G":"Galway","KE":"Kildare","KK":"Kilkenny","KY":"Kerry","LD":"Longford","LH":"Louth","LK":"Limerick","LM":"Leitrim","LS":"Laois","MH":"Meath","MN":"Monaghan","MO":"Mayo","OY":"Offaly","RN":"Roscommon","SO":"Sligo","TA":"Tipperary","WD":"Waterford","WH":"Westmeath","WW":"Wicklow","WX":"Wexford"},"SE":{"AB":"Stockholms l\u00e4n","AC":"V\u00e4sterbottens l\u00e4n","BD":"Norrbottens l\u00e4n","C":"Uppsala l\u00e4n","D":"S\u00f6dermanlands l\u00e4n","E":"\u00d6sterg\u00f6tlands l\u00e4n","F":"J\u00f6nk\u00f6pings l\u00e4n","G":"Kronobergs l\u00e4n","H":"Kalmar l\u00e4n","I":"Gotlands l\u00e4n","K":"Blekinge l\u00e4n","M":"Sk\u00e5ne l\u00e4n","N":"Hallands l\u00e4n","O":"V\u00e4stra G\u00f6talands l\u00e4n","S":"V\u00e4rmlands l\u00e4n","T":"\u00d6rebro l\u00e4n","U":"V\u00e4stmanlands l\u00e4n","W":"Dalarnas l\u00e4n","X":"G\u00e4vleborgs l\u00e4n","Y":"V\u00e4sternorrlands l\u00e4n","Z":"J\u00e4mtlands l\u00e4n"},"ZA":{"EC":"Eastern Cape","FS":"Free State","GT":"Gauteng","NL":"KwaZulu-Natal","LP":"Limpopo","MP":"Mpumalanga","NC":"Northern Cape","NW":"North West","WC":"Western Cape"},"NZ":{"NTL":"Northland","AUK":"Auckland","WKO":"Waikato","BOP":"Bay of Plenty","GIS":"Gisborne","HKB":"Hawkes Bay","TKI":"Taranaki","MWT":"Manawatu-Wanganui","WGN":"Wellington","TAS":"Tasman","NSN":"Nelson","MBH":"Marlborough","WTC":"West Coast","CAN":"Canterbury","OTA":"Otago","STL":"Southland"},"SG":{"SG-01":"Central Singapore","SG-02":"North East","SG-03":"North West","SG-04":"South East","SG-05":"South West"},"GB":{"ABD":"Aberdeenshire","ABE":"Aberdeen City","AGB":"Argyll and Bute","AGY":"Isle of Anglesey [Sir Ynys M\u00f4n GB-YNM]","ANS":"Angus","ANT":"Antrim","ARD":"Ards","ARM":"Armagh","BAS":"Bath and North East Somerset","BBD":"Blackburn with Darwen","BDF":"Bedfordshire","BDG":"Barking and Dagenham","BEN":"Brent","BEX":"Bexley","BFS":"Belfast","BGE":"Bridgend [Pen-y-bont ar Ogwr GB-POG]","BGW":"Blaenau Gwent","BIR":"Birmingham","BKM":"Buckinghamshire","BLA":"Ballymena","BLY":"Ballymoney","BMH":"Bournemouth","BNB":"Banbridge","BNE":"Barnet","BNH":"Brighton and Hove","BNS":"Barnsley","BOL":"Bolton","BPL":"Blackpool","BRC":"Bracknell Forest","BRD":"Bradford","BRY":"Bromley","BST":"Bristol, City of","BUR":"Bury","CAM":"Cambridgeshire","CAY":"Caerphilly [Caerffili GB-CAF]","CGN":"Ceredigion [Sir Ceredigion]","CGV":"Craigavon","CHS":"Cheshire","CKF":"Carrickfergus","CKT":"Cookstown","CLD":"Calderdale","CLK":"Clackmannanshire","CLR":"Coleraine","CMA":"Cumbria","CMD":"Camden","CMN":"Carmarthenshire [Sir Gaerfyrddin GB-GFY]","CON":"Cornwall","COV":"Coventry","CRF":"Cardiff [Caerdydd GB-CRD]","CRY":"Croydon","CSR":"Castlereagh","CWY":"Conwy","DAL":"Darlington","DBY":"Derbyshire","DEN":"Denbighshire [Sir Ddinbych GB-DDB]","DER":"Derby","DEV":"Devon","DGN":"Dungannon","DGY":"Dumfries and Galloway","DNC":"Doncaster","DND":"Dundee City","DOR":"Dorset","DOW":"Down","DRY":"Derry","DUD":"Dudley","DUR":"Durham","EAL":"Ealing","EAY":"East Ayrshire","EDH":"Edinburgh, City of","EDU":"East Dunbartonshire","ELN":"East Lothian","ELS":"Eilean Siar","ENF":"Enfield","ERW":"East Renfrewshire","ERY":"East Riding of Yorkshire","ESS":"Essex","ESX":"East Sussex","FAL":"Falkirk","FER":"Fermanagh","FIF":"Fife","FLN":"Flintshire [Sir y Fflint GB-FFL]","GAT":"Gateshead","GLG":"Glasgow City","GLS":"Gloucestershire","GRE":"Greenwich","GWN":"Gwynedd","HAL":"Halton","HAM":"Hampshire","HAV":"Havering","HCK":"Hackney","HEF":"Herefordshire, County of","HIL":"Hillingdon","HLD":"Highland","HMF":"Hammersmith and Fulham","HNS":"Hounslow","HPL":"Hartlepool","HRT":"Hertfordshire","HRW":"Harrow","HRY":"Haringey","IOS":"Isles of Scilly","IOW":"Isle of Wight","ISL":"Islington","IVC":"Inverclyde","KEC":"Kensington and Chelsea","KEN":"Kent","KHL":"Kingston upon Hull, City of","KIR":"Kirklees","KTT":"Kingston upon Thames","KWL":"Knowsley","LAN":"Lancashire","LBH":"Lambeth","LCE":"Leicester","LDS":"Leeds","LEC":"Leicestershire","LEW":"Lewisham","LIN":"Lincolnshire","LIV":"Liverpool","LMV":"Limavady","LND":"London, City of","LRN":"Larne","LSB":"Lisburn","LUT":"Luton","MAN":"Manchester","MDB":"Middlesbrough","MDW":"Medway","MFT":"Magherafelt","MIK":"Milton Keynes","MLN":"Midlothian","MON":"Monmouthshire [Sir Fynwy GB-FYN]","MRT":"Merton","MRY":"Moray","MTY":"Merthyr Tydfil [Merthyr Tudful GB-MTU]","MYL":"Moyle","NAY":"North Ayrshire","NBL":"Northumberland","NDN":"North Down","NEL":"North East Lincolnshire","NET":"Newcastle upon Tyne","NFK":"Norfolk","NGM":"Nottingham","NLK":"North Lanarkshire","NLN":"North Lincolnshire","NSM":"North Somerset","NTA":"Newtownabbey","NTH":"Northamptonshire","NTL":"Neath Port Talbot [Castell-nedd Port Talbot GB-CTL]","NTT":"Nottinghamshire","NTY":"North Tyneside","NWM":"Newham","NWP":"Newport [Casnewydd GB-CNW]","NYK":"North Yorkshire","NYM":"Newry and Mourne","OLD":"Oldham","OMH":"Omagh","ORK":"Orkney Islands","OXF":"Oxfordshire","PEM":"Pembrokeshire [Sir Benfro GB-BNF]","PKN":"Perth and Kinross","PLY":"Plymouth","POL":"Poole","POR":"Portsmouth","POW":"Powys","PTE":"Peterborough","RCC":"Redcar and Cleveland","RCH":"Rochdale","RCT":"Rhondda, Cynon, Taff [Rhondda, Cynon,Taf]","RDB":"Redbridge","RDG":"Reading","RFW":"Renfrewshire","RIC":"Richmond upon Thames","ROT":"Rotherham","RUT":"Rutland","SAW":"Sandwell","SAY":"South Ayrshire","SCB":"Scottish Borders, The","SFK":"Suffolk","SFT":"Sefton","SGC":"South Gloucestershire","SHF":"Sheffield","SHN":"St. Helens","SHR":"Shropshire","SKP":"Stockport","SLF":"Salford","SLG":"Slough","SLK":"South Lanarkshire","SND":"Sunderland","SOL":"Solihull","SOM":"Somerset","SOS":"Southend-on-Sea","SRY":"Surrey","STB":"Strabane","STE":"Stoke-on-Trent","STG":"Stirling","STH":"Southampton","STN":"Sutton","STS":"Staffordshire","STT":"Stockton-on-Tees","STY":"South Tyneside","SWA":"Swansea [Abertawe GB-ATA]","SWD":"Swindon","SWK":"Southwark","TAM":"Tameside","TFW":"Telford and Wrekin","THR":"Thurrock","TOB":"Torbay","TOF":"Torfaen [Tor-faen]","TRF":"Trafford","TWH":"Tower Hamlets","VGL":"Vale of Glamorgan, The [Bro Morgannwg GB-BMG]","WAR":"Warwickshire","WBK":"West Berkshire","WDU":"West Dunbartonshire","WFT":"Waltham Forest","WGN":"Wigan","WIL":"Wiltshire","WKF":"Wakefield","WLL":"Walsall","WLN":"West Lothian","WLV":"Wolverhampton","WND":"Wandsworth","WNM":"Windsor and Maidenhead","WOK":"Wokingham","WOR":"Worcestershire","WRL":"Wirral","WRT":"Warrington","WRX":"Wrexham [Wrecsam GB-WRC]","WSM":"Westminster","WSX":"West Sussex","YOR":"York","ZET":"Shetland Islands"},"RO":{"AB":"Alba","AG":"Arges","AR":"Arad","B":"Bucuresti","BC":"Bacau","BH":"Bihor","BN":"Bistrita-Nasaud","BR":"Braila","BT":"Botosani","BV":"Brasov","BZ":"Buzau","CJ":"Cluj","CL":"Calarasi","CS":"Caras-Severin","CT":"Constanta","CV":"Covasna","DB":"D\u00e2mbovita","DJ":"Dolj","GJ":"Gorj","GL":"Galati","GR":"Giurgiu","HD":"Hunedoara","HR":"Harghita","IF":"Ilfov","IL":"Ialomita","IS":"Iasi","MH":"Mehedinti","MM":"Maramures","MS":"Mures","NT":"Neamt","OT":"Olt","PH":"Prahova","SB":"Sibiu","SJ":"Salaj","SM":"Satu Mare","SV":"Suceava","TL":"Tulcea","TM":"Timis","TR":"Teleorman","VL":"V\u00e2lcea","VN":"Vrancea","VS":"Vaslui"}};        var selects = document.getElementsByTagName('select');
        for (var s = 0; s < selects.length; s++) {
            if (['shipping_country', 'billing_country'].indexOf(selects[s].getAttribute('name')) > -1) {
                selects[s].setAttribute('autocomplete', "country");
                selects[s].autocomplete = "country";
                setCountryState(map, selects[s], selects[s].name.replace('_country', ''));
                selects[s].addEventListener('change', function (event) {
                    var country = event.target;
                    var name = country.name.replace('_country', '')
                    event.preventDefault();
                    setCountryState(map, country, name);
                });
            }
        }
    };
</script><script>
    smartlook('identify', 'cid-68e34489de137c9b2f02b06e51d626a3', {
        "offer": "dm-offers",
        "click_id": "",
        "affiliate": "",
        "sub_affiliate": "",
        "aff_click_id": ""
    });
</script>
<script>
const etAllowedKeys = [
    'event_key',
    'event_type',
    'event_location',
    'aff_id',
    'sub_aff_id',
    'everflow_offer_id',
    'offer_id',
    'external_customer_id',
    'source_id',
    'everflow_uid',
    'page',
    'everflow_transaction_id',
    'ip_address',
    'user_agent'
];
const etEndpoint = "https://theweightlossadvocates.com/api-dm/s";

function etSubmit(data) {
    if (typeof data != 'object') {
        // Submitted data was not in a valid format
        return;
    }
    fetch(etEndpoint, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
    })
        .catch(error => {
            // Failing silently for now
        });
}
</script>
<script type="text/javascript">
    var sub5Override = null;
    EF.configure({tld: "theweightlossadvocates.com"});
    var previousId = EF.getTransactionId();
    var pageEventsFired = false;
    var waitForClick = false;
    var eventsAttempted = 0;
    var noise = 0;

    var etSubmitData = {
        'event_key': 'click',
        'event_type': 'everflow_click',
        'event_location': 'website',
        'aff_id': '',
        'sub_aff_id': '',
        'everflow_offer_id': '',
        'offer_id': 'dm-offers',
        'external_customer_id': 'cid-68e34489de137c9b2f02b06e51d626a3',
        'source_id': '',
        'everflow_uid': '',
        'page': 'checkout',
        'ip_address': '34.46.237.233',
        'user_agent': 'curl/8.5.0',
        'noise': noise,
        'sub1': '',
        'sub2': '',
        'sub3': '',
        'sub4': '',
        'sub5': '',
        'fb_ad_id': '',
        'adv5': "",
    };

    function getQueryParam(key) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(key);
    }

        // If an ID already exists, we don't want to generate a new click
    if (previousId == "") {
        waitForClick = true;
        EF.click({
            tracking_domain: "https://www.s83hzm3ak.com",
            offer_id: EF.urlParameter('oid'),
            affiliate_id: EF.urlParameter('affid'),
            source_id: EF.urlParameter('source_id'),
            sub1: EF.urlParameter('sub1'),
            sub2: EF.urlParameter('sub2'),
            sub3: EF.urlParameter('sub3'),
            sub4: EF.urlParameter('sub4'),
            sub5: null ?? EF.urlParameter('sub5'),
            fbclid: EF.urlParameter('fbclid'),
            gclid: EF.urlParameter('gclid'),
            ttclid: EF.urlParameter('ttclid'),
            sccid: EF.urlParameter('sccid') ?? EF.urlParameter('ScCid'),
            uid: EF.urlParameter('uid'),
            transaction_id: EF.urlParameter('_ef_transaction_id'),
            Adv1: 'cid-68e34489de137c9b2f02b06e51d626a3',
            // coupon_code: EF.urlParameter('coupon_code'),//Note: caused intermittent tracking issues when present
            parameters: {
                sccid: EF.urlParameter('sccid') ?? EF.urlParameter('ScCid'),
                "subid": EF.urlParameter('source_id'),
                "utm_source": EF.urlParameter('sub1'),
                "utm_medium": EF.urlParameter('sub2'),
                "utm_campaign": EF.urlParameter('sub3'),
                "utm_content": EF.urlParameter('sub4'),
                "AffClickID": EF.urlParameter('sub5'),
                "click_id": EF.urlParameter('_ef_transaction_id'),
            }
        }).then(function(transId){
            if (typeof transId == 'string' && transId !== '') {
                storeTransIdOnServer(transId, '_ef_transaction_id');
                firePageEvents(transId);
            }
        });
        if (getQueryParam('oid') != null || getQueryParam('_ef_transaction_id') != null) {
            etSubmitData['everflow_transaction_id'] = '';
            etSubmitData['event_key'] = 'click';
            etSubmit(etSubmitData);
        }
    }

    function storeTransIdOnServer(transId,key) {
        if (transId != "" && transId != null && transId != undefined) {
            var url = new URL(window.location.href);
            var img = document.createElement('img');
            var pathname = url.pathname.split("/").filter((value) => value)[0] ?? '';
            if (pathname != "") {
                pathname = pathname + '/';
            }
            if (pathname.indexOf('.php') > -1) {
                pathname = '';
            }
            img.src = url.origin + '/' + pathname + 'storeTransId.php?' + key + '=' + transId;
            img.style.visibility = 'hidden';
            img.style.height = '0px';
            img.style.width = '0px';
            document.body.appendChild(img);
        }
    }

    function firePageEvents(transId = null) {
        if (pageEventsFired || eventsAttempted >= 20 || false) {
            return;
        }

        let efOfferId = null;
        let efTransactionId = null;
        let eventId = 9;
        let advEventId = 7;
        let oidEventExclusions = [6];
        let exclusionMatched = false;
        let couponCode = null;
        if (oidEventExclusions.some((oid) => oid == efOfferId)) {
            eventId = null;
            advEventId = null;
            exclusionMatched = true;
        }
        let conversionDetails = {
            offer_id: '',
            adv1: 'cid-68e34489de137c9b2f02b06e51d626a3',
            adv2: '',
            adv3: '',
            adv4: null ?? (typeof getCookie === "function" ? getCookie('_fbp') : null),
            adv5: "",
        };

        if (advEventId) {
            conversionDetails.adv_event_id = advEventId;
        } else if (eventId) {
            conversionDetails.event_id = eventId;
        }
        if (transId) {
            conversionDetails.transaction_id = transId;
        }
        // URL value should overwrite the generated one
        if (efTransactionId) {
            conversionDetails.transaction_id = efTransactionId;
        }
        if (couponCode) {
            conversionDetails.coupon_code = couponCode;
        }

        if ((advEventId && true) || eventId || exclusionMatched
            || false) {
                            EF.configure({ tracking_domain: "https://www.s83hzm3ak.com"});
                EF.conversion(conversionDetails).then((results) => {
                    eventsAttempted++;
                    if (results.conversion_id && results.transaction_id) {
                        pageEventsFired = true;
                    } else {
                        setTimeout(firePageEvents,500,transId);
                    }
                });
                etSubmitData['event_key'] = 'add_to_cart';
                etSubmitData['event_type'] = 'everflow_' + (advEventId == null && eventId == null ? 'conversion' : 'event');
                etSubmitData['everflow_transaction_id'] = efTransactionId ? efTransactionId : (transId ? transId : '');
                etSubmitData['noise'] = noise;
                etSubmit(etSubmitData);
                noise = 1;
                                }
    }
    if (!waitForClick) {
        firePageEvents();
    }
</script>
<script src="../assets/js_from_site/checkout.js"></script>
</body>
</html>