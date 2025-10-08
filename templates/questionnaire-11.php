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
    <input type="hidden" name="page_slug" value="questionnaire-11">
    <input type="hidden" name="external_customer_id" value="cid-68e274b69e3d0201fa8e87e9e441e2d3"><input type="hidden" name="domain" value="theweightlossadvocates.com"><input type="hidden" name="offer_slug" value="dm-offers"><input type="hidden" name="external_created_at" value="1759671478">    <input type="hidden" name="csrf_token" value="4e777e1a61b66959b9330585b1cfd0a1c983c1de02493cdecf6da22fea21e44e4a2a2d31ee" />
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
        <h1>Do you or an immediate family member have a history of multiple endocrine neoplasia type 2?</h1>
        <p>Any of these complications may disqualify you from weight loss medication approval. </p>
        <br>
        <div class="radioselection2 row">
            <input type="radio" name="intake_neoplasia" id="intake_neoplasiayes" value="yes" onclick="triggerBadResponseMessage()" >
            <label for="intake_neoplasiayes" class="col">
                Yes
            </label>

            <input type="radio" name="intake_neoplasia" id="intake_neoplasiano" value="no" onclick="nextStep()" >
            <label for="intake_neoplasiano" class="col">
                No
            </label>
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

    setProgressValues(11);

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
        return handleYesNo('intake_neoplasia');
    }</script>
<script src="../assets/js/bootstrap.bundle.min.js"

       ></script>
<div class="footer-badge"></div>
<div class="footer"><center><a href="terms.php">Terms & Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a href="terms.php#refunds">Refund Policy</a> | <a href="https://Weight Loss Advocates.everflowclient.io/affiliate/signup" target="_blank" rel="nofollow">Affiliates</a> | <a href="contact.php">Contact Us</a> <br><br>Weight Loss Advocates, LLC</center></div><br><br><br>
</body>
</html>
