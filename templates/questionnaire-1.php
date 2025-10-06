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
    <title>Get Qualified</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/qualify.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <script type="text/javascript" src="../assets/js/everflow.js"></script>
<script src="../assets/../assets/js/smartlook.js"></script>
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
    _paq.push(["setCookieDomain", "*.theweightlossadvocates.com"]);
    _paq.push(["setDomains", ["*.theweightlossadvocates.com","*.app.theweightlossadvocates.com"]]);
                _paq.push(['setCustomDimension', 4, 'cid-68e272e7bc1b1ec0cda820eb61e21f66']);    _paq.push(["enableCrossDomainLinking"]);
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
            'customer_id': 'cid-68e272e7bc1b1ec0cda820eb61e21f66',
            'last_touch_channel': '',
            'offer_slug': 'dm-offers',
            'page': 'WeightLossAdvocates-1'
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
</head>
<body>
  <form id="WeightLossAdvocatesForm" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" >
    <input type="hidden" name="action" value="WeightLossAdvocates_submit">
    <input type="hidden" name="page_slug" value="questionnaire-1">
    <input type="hidden" name="external_customer_id" value="cid-68e272e7bc1b1ec0cda820eb61e21f66"><input type="hidden" name="domain" value="theweightlossadvocates.com"><input type="hidden" name="offer_slug" value="dm-offers"><input type="hidden" name="external_created_at" value="1759671015">    <input type="hidden" name="csrf_token" value="ebcc9162b6c6ef2b9d7a2d2ae63595c91ea1a18501e5898d02cc8faa90412444a06679ca9f" />
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container justify-content-center">
            <img src="../assets/images/logo-dk.png" alt="Weight Loss Advocates" width='60px' class="img-fluid">
        </div>
    </nav>
    <section class="container questions-stage">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12" id="card-master">
                    <div>
    <div class="card step">
        <div class="progress-container">
            <p class="progressnotice">Your Progress</p>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 0%"></div>
            </div>
        </div>
        <div class="card-body">
            <h1>Are you male or female?</h1>
            <p>Our sex and hormones impact how our bodies metabolize food. </p>
            <br>
            <div class="radioselection d-flex">
                <input type="radio" class="col-sm-6 triggerNext" name="intake_gender" id="male" value="male" onclick="nextStep()" >

                <label for="male" class="col">
                    <i class="bi bi-gender-male"></i>
                    <br>Male
                </label>
                <input type="radio" class="col-sm-6 triggerNext" name="intake_gender" id="female" value="female" onclick="nextStep()" >
                <label for="female" class="col">
                    <i class="bi bi-gender-female"></i>
                    <br>Female
                </label>

            </div>
        </div>
    </div>
    <div id="featuredLogos" style="margin-top:40px;padding: 0px 20px;text-align:center;">
        <div class="d-none d-md-block">
            <p style="color:#969ecf;font-size:12px;">Weight Loss Advocates featured on:</p>
            <img src="../assets/images/seen-on-desktop.png" class="img-fluid">
        </div>
        <div class="d-block d-md-none">
            <p style="color:#969ecf;font-size:12px;">Weight Loss Advocates featured on:</p>
            <img src="../assets/images/seen-on-mobile.png" class="img-fluid">
        </div>
    </div>
</div>            </div>
        </div>
    </section>
</form>

<section id="bmiCorrection" class="container intersticial popup warning" style="display:none;margin: 0 auto;left: 0;">
    <div class="row" style="max-width:100%;padding:0 20px">
        <div class="col-lg-6 offset-lg-3 col-md-12" style="text-align:center;">
            <div class="spacer">&nbsp;</div>
            <div class="spacer">&nbsp;</div>
            <div class="spacer">&nbsp;</div>
            <center><h1>It Looks like you may not qualify...</h1></center>
            <br>
            <div class="col-12 bmi" style="display:inline-block;margin:0 auto;width:auto;">
                <center> YOUR BMI:<br>
                    <h1 id="bmiCorrectionH1"></h1></center>
            </div>
            <br><br>

            <br><br>
            <h4 style="font-weight:300;">To qualify for GLP-1 Medications like Ozempic® or Mounjaro® your BMI
                needs to be 27 or higher. Please check your answers again to verify your BMI.</h4>

            <div class="spacer">&nbsp;</div>
            <div class="spacer">&nbsp;</div>
            <center>
                    <button type="button" class="btn btn-lg ctaBtn1" id="closeBmi">
                        Check Again
                    </button>
                </center>

            <div class="spacer">&nbsp;</div>
            <center>
                <a href="not-qualified.php"><button type="button" class="btn btn-lg ctaBtn1">
                        My Selection Is Correct
                    </button></a>
            </center>
        </div>
    </div>
</section>

<section id="generalWarning" class="container intersticial popup warning" style="display:none">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-12">
            <div class="spacer">&nbsp;</div>
            <div class="spacer">&nbsp;</div>
            <div class="spacer">&nbsp;</div>
            <center><h1>It Looks like you may not qualify...</h1></center>
            <br><br>
            <h4 style="font-weight:300;">Based on your answers, your medical history you're not a great candidate for telemedicine.  The safest course of action would have you consider working with a local doctor or clinic as certain complications may need closer monitoring or response times than telemedicine may allow.
            </h4>
<br><br>
            <p class="textalt3">If you believe you're an exception and would like to have someone from our medical staff review more details or provide additional advice regarding your specific circumstances, you can schedule a call here <a href="https://calendly.com/connie-Weight Loss Advocates">Schedule a call with a Nurse</a></p>

            <div class="spacer">&nbsp;</div>
            <div class="spacer">&nbsp;</div>
            <center>
                <button type="button" class="btn btn-lg ctaBtn1" id="closeWarning">
                    Check Again
                </button>
            </center>
            <div class="spacer">&nbsp;</div>
            <center>
                <a href="not-qualified.php"><button type="button" class="btn btn-lg ctaBtn1">
                    My Selection Is Correct
                </button></a>
            </center>

        </div>
    </div>
</section>

<script type="text/javascript" src="../assets/js/jquery-1.12.1.min.js"></script>
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
        'external_customer_id': 'cid-68e272e7bc1b1ec0cda820eb61e21f66',
        'source_id': '',
        'everflow_uid': '',
        'page': 'WeightLossAdvocates-1',
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
            Adv1: 'cid-68e272e7bc1b1ec0cda820eb61e21f66',
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
        let eventId = 6;
        let advEventId = 4;
        let oidEventExclusions = [];
        let exclusionMatched = false;
        let couponCode = null;
        if (oidEventExclusions.some((oid) => oid == efOfferId)) {
            eventId = null;
            advEventId = null;
            exclusionMatched = true;
        }
        let conversionDetails = {
            offer_id: '',
            adv1: 'cid-68e272e7bc1b1ec0cda820eb61e21f66',
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
                etSubmitData['event_key'] = 'WeightLossAdvocates_started';
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
<script>
    const WeightLossAdvocatesForm = document.getElementById("WeightLossAdvocatesForm");
    const progressBar = document.querySelector(".progress-bar");

    function nextStep() {
        let passed = validateStep();
        if (passed) {
            document.getElementById('WeightLossAdvocatesForm').submit();
        }
    }

    function setProgressValues(step) {
        if (progressBar) {
            progressBar.style.width = ((step - 1) / (14 + 3)) * 100 + "%";
        }
    }

    function triggerBadResponseMessage() {
        let generalWarning = document.getElementById('generalWarning');
        generalWarning.style.display = 'block';
    }

    function addPulse(elements) {
        if (typeof elements.forEach !== 'function') {
            elements = [elements];
        }
        elements.forEach((item) => {
            item.classList.add("pulse");
        });
    }

    function removePulse(elements) {
        if (typeof elements.forEach !== 'function') {
            elements = [elements];
        }
        elements.forEach((item) => {
            item.classList.remove("pulse");
        });
    }

    function handleYesNo(name) {
        var elements = document.querySelectorAll('[name="'+name+'"]');
        const selectedValue = document.querySelector('input[name="'+name+'"]:checked')?.value;
        if (selectedValue == 'no') {
            removePulse(elements);
            return true;
        } else if (selectedValue == 'yes') {
            triggerBadResponseMessage();
        }
        elements.forEach((el) => {
            addPulse(el);
        });
        return false;
    }

    setProgressValues(1);

    function hideElement(id) {
        document.getElementById(id).style.display = 'none';
    }
    document.getElementById('closeBmi').addEventListener('click',function(){
        hideElement('bmiCorrection');
    });
    document.getElementById('closeWarning').addEventListener('click',function(){
        hideElement('generalWarning');
    });
    function validateStep() {
    let male = document.getElementById('male');
    let female = document.getElementById('female');
    removePulse([male,female]);
    if (male.checked || female.checked)
        return true;
    addPulse([male,female]);
    return false;
}</script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="https://utils.webimghost.com/scripts/js/utils.min.js"></script>
<div class="footer-badge"><script src="https://static.legitscript.com/seals/29752987.js"></script></div>
<script>
    const intervalId = setInterval(() => {
        const el = document.querySelector('a[href^="https://www.legitscript.com"]'); // Adjust the selector as needed
        if (el) {
            // Perform your action here, e.g., hide the element
            el.style.target = '_blank';
            clearInterval(intervalId);
        }
    }, 100); // Checks every 100ms
</script>
<div class="footer"><center><a href="terms.php">Terms & Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a href="terms.php#refunds">Refund Policy</a> | <a href="https://Weight Loss Advocates.everflowclient.io/affiliate/signup" target="_blank" rel="nofollow">Affiliates</a> | <a href="contact.php">Contact Us</a> <br><br>Weight Loss Advocates, LLC</center></div><br><br><br><script>
    /*! lozad.js - v1.5.0 - 2018-07-16 https://github.com/ApoorvSaxena/lozad.js Apoorv Saxena; Licensed MIT */
    !function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.lozad=e()}(this,function(){"use strict";function t(t){t.setAttribute("data-loaded",!0)}var e=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var r=arguments[e];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(t[n]=r[n])}return t},r=document.documentMode,n={rootMargin:"0px",threshold:0,load:function(t){if("picture"===t.nodeName.toLowerCase()){var e=document.createElement("img");r&&t.getAttribute("data-iesrc")&&(e.src=t.getAttribute("data-iesrc")),t.getAttribute("data-alt")&&(e.alt=t.getAttribute("data-alt")),t.appendChild(e)}t.getAttribute("data-src")&&(t.src=t.getAttribute("data-src")),t.getAttribute("data-srcset")&&(t.srcset=t.getAttribute("data-srcset")),t.getAttribute("data-background-image")&&(t.style.backgroundImage="url('"+t.getAttribute("data-background-image")+"')")},loaded:function(){}},o=function(t){return"true"===t.getAttribute("data-loaded")};return function(){var r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:".lozad",a=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},i=e({},n,a),d=i.rootMargin,u=i.threshold,c=i.load,s=i.loaded,g=void 0;return window.IntersectionObserver&&(g=new IntersectionObserver(function(e,r){return function(n,a){n.forEach(function(n){n.intersectionRatio>0&&(a.unobserve(n.target),o(n.target)||(e(n.target),t(n.target),r(n.target)))})}}(c,s),{rootMargin:d,threshold:u})),{observe:function(){for(var e=function(t){return t instanceof Element?[t]:t instanceof NodeList?t:document.querySelectorAll(t)}(r),n=0;n<e.length;n++)o(e[n])||(g?g.observe(e[n]):(c(e[n]),t(e[n]),s(e[n])))},triggerLoad:function(e){o(e)||(c(e),t(e),s(e))}}}});
</script>
<script>
    window.lazyLoad = lozad('.lazyload' );
    window.lazyLoad.observe();
</script><script>
    smartlook('identify', 'cid-68e272e7bc1b1ec0cda820eb61e21f66', {
        "offer": "dm-offers",
        "click_id": "",
        "affiliate": "",
        "sub_affiliate": "",
        "aff_click_id": ""
    });
</script>
</body>
</html>
