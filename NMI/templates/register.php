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
        <style>
        /* The message box is shown when the user clicks on the password field */
        #message {
            display:none;
            color: #000;
            position: relative;
            padding: 10px;
            margin-top: 0px;
        }
        #message.show { display: block !important; }

        #message p {
            padding: 0px 35px;
            font-size: 12px;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
            color: green;
        }

        .valid:before {
            font: normal 1em/1 Arial, sans-serif;
            position: relative;
            left: -15px;
            content: "\2714";
        }

        /* Add a red text color and an "x" icon when the requirements are wrong */
        .invalid {
            color: red;
        }

        .invalid:before {
            font: normal 1em/1 Arial, sans-serif;
            position: relative;
            left: -15px;
            content: "\2716";
        }
    </style>
</head>
<body>
  <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
    <input type="hidden" name="action" value="WeightLossAdvocates_submit">
    <input type="hidden" name="page_slug" value="register">
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container justify-content-center">
            <img src="../assets/images/logo-dk.png" alt="Weight Loss Advocates" width='60px' class="img-fluid">
        </div>
    </nav>
    <section class="container questions-stage">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12">
                <div class="card">
                    <div class="progress-container">
                        <p class="progressnotice">Your Progress</p>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1>Let's get your information</h1>
                        <p>Before you select your medication, we'll need some more info. </p>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="shipping_firstname">Legal First Name</label><br>
                                <input type="text" class="form-control ub-input-item single text form_elem_first_name"
                                       required name="shipping_firstname"
                                       value=""
                                       placeholder="First Name*" data-toggle="tooltip"
                                       data-placement="auto left"
                                       title="Letters, numbers, apostrophes, and hyphens" data-validation="required"
                                       minlength="2" maxlength="32"
                                       pattern="^[a-zA-Z0-9\s\-']+$"
                                       autofocus>
                            </div>
                            <div class="col">
                                <label for="shipping_lastname">Legal Last Name</label><br>
                                <input type="text"
                                       class="form-control ub-input-item single text form_elem_last_name"
                                       required name="shipping_lastname"
                                       value=""
                                       placeholder="Last Name*" data-toggle="tooltip"
                                       data-placement="auto left"
                                       title="Letters, numbers, apostrophes, and hyphens" data-validation="required"
                                       minlength="2" maxlength="32"
                                       pattern="^[a-zA-Z0-9\s\-']+$">
                            </div>
                            <p style="margin:0"><small>*It is important to use the first and last name that matches your ID in order to receive your prescription.</small></p>
                            <div class="spacer">&nbsp;</div>
                            <div class="col-12">
                                <label for="shipping_phone">Phone Number</label> <br>
                                <input type="tel"
                                       id="shipping_phone"
                                       class="form-control ub-input-item single text form_elem_phone_number"
                                       required name="shipping_phone"
                                       value=""
                                       placeholder="(000) 000-0000" data-toggle="tooltip"
                                       data-placement="auto left"
                                       title="(000) 000-0000" minlength="10" pattern="\(\d{3}\) \d{3}-\d{4}">
                            </div>

                            <div class="spacer">&nbsp;</div>
                            <div class="col-12">
                                <label for="shipping_email">Email</label> <br>
                                <input id="email" type="email"
                                       class="form-control ub-input-item single text form_elem_email duplicated-input"
                                       required
                                       name="shipping_email"
                                       value=""
                                       placeholder="Email Address*"
                                       data-toggle="tooltip" data-placement="auto left"
                                       title="Email"
                                       data-validation="email" data-pair="emailVerification" data-warning="emailWarning"
                                       pattern="^(?!.*\.\.)[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]{0,61}[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]{0,61}[A-Za-z0-9])?$" maxlength="254" spellcheck="false" inputmode="email">
                            </div>
                            <div class="spacer">&nbsp;</div>
                            <div class="col-12">
                                <label for="shipping_email_verification">Please verify your email:</label> <br>
                                <input id="emailVerification" type="email"
                                       class="form-control ub-input-item single text form_elem_email duplicated-input"
                                       required
                                       name="shipping_email_verification"
                                       value=""
                                       placeholder="Confirm Email Address*"
                                       data-toggle="tooltip" data-placement="auto left"
                                       title="Email"
                                       data-validation="email" data-pair="email" data-warning="emailWarning"
                                       pattern="^(?!.*\.\.)[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]{0,61}[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]{0,61}[A-Za-z0-9])?$" maxlength="254" spellcheck="false" inputmode="email">
                                <div id="emailWarning" style="display:none;color:red;font-weight:700;">The email addresses you entered do not match. Please check and ensure both entries are the same.</div>
                            </div>
                            <div class="spacer">&nbsp;</div>
                            <div class="col-12">
                                <input type="checkbox" name="acknowledge_hipaa"
                                       value="yes"  style="position:static;opacity:1"> By checking this box, I understand that my information is protected by HIPAA and I agree to the <a href="./terms.php">terms</a> and <a href="./privacy.php">privacy policies</a> and to be contacted as necessary by Weight Loss Advocates regarding customer care support. To opt-out, reply STOP. For support, reply HELP. Message frequency varies. Message and data rates may apply.
                            </div>

                            <div class="spacer">&nbsp;</div>
                            <div class="spacer">&nbsp;</div>
                            <div class="spacer">&nbsp;</div>
                            <button type="submit" id="btnSubmit" class="btn btn-lg ctaBtn1 btnsubmit">
                                Save & Continue <i class="bi bi-arrow-right-short"></i>
                            </button>
                            <div class="spacer">&nbsp;</div>
                            <div class="spacer">&nbsp;</div>
                            <div class="spacer">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-badge"><a href="https://www.legitscript.com/websites/?checker_keywords=theweightlossadvocates.com" target="_blank" title="Verify LegitScript Approval for www.theweightlossadvocates.com"><img src="../assets/images/183773.png" alt="Verify Approval for www.theweightlossadvocates.com" width="73" height="79" /></a></div><script>
    const intervalId = setInterval(() => {
        const el = document.querySelector('a[href^="https://www.legitscript.com"]');
        if (el) {
            el.style.target = '_blank';
            clearInterval(intervalId);
        }
    }, 100);
</script>
</form>
<div class="footer"><center><a href="terms.php">Terms & Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a href="terms.php#refunds">Refund Policy</a> | <a href="https://Weight Loss Advocates.everflowclient.io/affiliate/signup" target="_blank" rel="nofollow">Affiliates</a> | <a href="contact.php">Contact Us</a> <br><br>Weight Loss Advocates, LLC</center></div><br><br><br><script type="text/javascript" src="../assets/js/jquery-1.12.1.min.js"></script>
<script>
</script>
<script src="../assets/js/bootstrap.bundle.min.js"

       ></script>
<script>
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var special = document.getElementById("special");
    var length = document.getElementById("length");
    var invalidChars = document.getElementById("invalidChars");
    var invalidCharsFound = document.getElementById("invalidCharsFound");
    var submitButton = document.getElementById('btnSubmit');
    var passwordMessage = document.getElementById("message");

    $(".progress-bar").animate({
        width: "81.25%"
    }, 500);
    document.getElementById('shipping_phone').addEventListener('input', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
    document.getElementById('shipping_address1').addEventListener('input', function (e) {
        const poBoxPattern = /(?:P\.? ?O\.?\s*Box|Post\s*Office\s*Box)/i;
        let poBoxWarning = document.getElementById('poBoxWarning');
        let addressInput = document.getElementById('shipping_address1');

        if (poBoxPattern.test(addressInput.value)) {
            poBoxWarning.style.display = 'inline'; // Show warning
            submitButton.disabled = true; // Disable submit button
        } else {
            poBoxWarning.style.display = 'none'; // Hide warning
            submitButton.disabled = false; // Enable submit button
        }
    });
    $(document).ready(function() {
        $('.duplicated-input').on('input change', function() {
            let warning = $('#'+$(this).data('warning'));
            let pair = $('#'+$(this).data('pair'));
            console.log([warning,pair,$(this)])
            if ($(this).val() != pair.val()) {
                warning.css('display','inline');
                submitButton.disabled = true;
            } else {
                warning.css('display','none');
                submitButton.disabled = false;
            }
        });
    });

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        passwordMessage.style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        passwordMessage.style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        var valid = true;
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            valid = false;
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            valid = false;
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            valid = false;
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate special characters
        var specials = /[!@#$%^*]/g;
        if(myInput.value.match(specials)) {
            special.classList.remove("invalid");
            special.classList.add("valid");
        } else {
            valid = false;
            special.classList.remove("valid");
            special.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            valid = false;
            length.classList.remove("valid");
            length.classList.add("invalid");
        }

        // Display any invalid characters
        var allowedCharacters = /[a-zA-Z0-9!@#$%^*]/g;
        var invalidCharactersFound = myInput.value;
        invalidCharactersFound = invalidCharactersFound.replace(allowedCharacters, '');
        if (invalidCharactersFound.length > 0) {
            valid = false;
            invalidCharsFound.innerHTML = invalidCharactersFound;
            invalidChars.classList.remove("valid");
            invalidChars.classList.add("invalid");
        } else {
            invalidCharsFound.innerHTML = 'None';
            invalidChars.classList.remove("invalid");
            invalidChars.classList.add("valid");
        }

        if (valid) {
            passwordMessage.classList.remove('show');
            if (submitButton.classList.contains('disabled-by-password')) {
                submitButton.disabled = false;
                submitButton.classList.contains('disabled-by-password');
            }
        } else {
            passwordMessage.classList.add('show');
            submitButton.classList.add('disabled-by-password');
            submitButton.disabled = true;
        }
    }
</script>
</body>
</html>
