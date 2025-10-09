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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"
         >
    <link href="../assets/css/qualify.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
</head>
<body>
  <form id="WeightLossAdvocatesForm" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" >
    <input type="hidden" name="action" value="WeightLossAdvocates_submit">
    <input type="hidden" name="page_slug" value="questionnaire-12">
    <input type="hidden" name="external_customer_id" value="cid-68e274b6d07fdfeaae96b928b8026a98"><input type="hidden" name="domain" value="theweightlossadvocates.com"><input type="hidden" name="offer_slug" value="dm-offers"><input type="hidden" name="external_created_at" value="1759671478">    <input type="hidden" name="csrf_token" value="782b59fbc49157a9b87c88be0ab63b318091c71623496e00ec8bf2b3817b65e5b44ccedd70" />
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container justify-content-center">
            <img src="../assets/images/logo-dk.png" alt="Weight Loss Advocates" width='60px' class="img-fluid">
        </div>
    </nav>
    <section class="container questions-stage">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12" id="card-master">
                    <div class="card step">
    <div class="progress-container">
        <p class="progressnotice">Your Progress</p>
        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar" style="width: 0%"></div>
        </div>
    </div>
    <div class="card-body survey-question">
        <h1>Do you have any of the following?</h1>
        <p>If you have any of the following, please tell the doctor more below.</p>
        <br>
        <div class="radioselection2">
            <input type="checkbox" name="intake_kidneyConditions[]" id="none" value="none" onclick="nextStep()" >
            <label for="none" class="col-12">
                None of the below
            </label>
            <hr>
            <br>
            <input type="checkbox" name="intake_kidneyConditions[]" id="condition1" value="kidneyConditions">
            <label for="condition1" class="col-12">
                Kidney Conditions
            </label>

            <input type="checkbox" name="intake_kidneyConditions[]" id="condition2" value="Seen a kidney specialist in the past 12 months">
            <label for="condition2" class="col-12">
                Seen a kidney specialist in the past 12 months
            </label>

            <input type="checkbox" name="intake_kidneyConditions[]" id="condition3" value="History of solitary kidney, or kidney transplant">
            <label for="condition3" class="col-12">
                History of solitary kidney, or kidney transplant
            </label>

            <input type="checkbox" name="intake_kidneyConditions[]" id="condition4" value="History of kidney failure">
            <label for="condition4" class="col-12">
                History of kidney failure
            </label>

            <hr>
            <p>Additional info:</p>
            <textarea style="border-radius:15px;padding:20px;border:1px solid #999;" class="col-12" rows="5" name="intake_kidneyConditionsInfo"></textarea>
        <br><br>
            </div>

        <div class="row g-3 justify-content-center">
            <button type="button" class="btn btn-lg ctaBtn1" onclick="nextStep()">Next</button>
          <div class="spacer">&nbsp;</div>
            </div>
        <div class="spacer">&nbsp;</div>
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

    setProgressValues(12);

    function hideElement(id) {
        document.getElementById(id).style.display = 'none';
    }
    document.getElementById('closeBmi').addEventListener('click',function(){
        hideElement('bmiCorrection');
    });
    document.getElementById('closeWarning').addEventListener('click',function(){
        hideElement('generalWarning');
    });
        const kidneyConditions = document.querySelectorAll('input[name="intake_kidneyConditions[]"]');
    function validateStep() {
        removePulse(kidneyConditions);
        var anyChecked = false;
        kidneyConditions.forEach((healthEl) => {
            if (healthEl.checked == true) {
                anyChecked = true;
                addPulse(healthEl);
            }
        });
        if (anyChecked) {
            return true;
        }
        addPulse(kidneyConditions);
        return false;
    }
    kidneyConditions.forEach((el) => {el.addEventListener('change', function () {
        if (el.value == "none") {
            kidneyConditions.forEach((healthEl) => {
                if (healthEl.value != "none") {
                    healthEl.checked = false;
                }
            });
        } else {
            document.getElementById("none").checked = false;
        }
    })});</script>
<script src="../assets/js/bootstrap.bundle.min.js"

       ></script>
<div class="footer-badge"></div>
<div class="footer"><center><a href="terms.php">Terms & Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a href="terms.php#refunds">Refund Policy</a> | <a href="https://Weight Loss Advocates.everflowclient.io/affiliate/signup" target="_blank" rel="nofollow">Affiliates</a> | <a href="contact.php">Contact Us</a> <br><br>Weight Loss Advocates, LLC</center></div><br><br><br>
</body>
</html>
