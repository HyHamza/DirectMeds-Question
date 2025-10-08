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
    <link href="../assets/css_from_site/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css_from_site/qualify.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css_from_site/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="../assets/img_from_site/favicon.png">
    <link rel="stylesheet" type="text/css" href="../assets/css_from_site/utils.min.css">
    <script type="text/javascript" src="../assets/js_from_site/everflow.js"></script>
<script src="../assets/js_from_site/smartlook.js"></script>
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
    <input type="hidden" name="page_slug" value="shipping">
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container justify-content-center">
            <img src="../assets/img_from_site/logo-dk.png" alt="Weight Loss Advocates" width='60px' class="img-fluid">
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
                        <h1>Where do we send your medication?</h1>
                        <br>
                        <div class="row">
                            <div class="spacer">&nbsp;</div>
                            <div class="col-12">
                                <label for="shipping_address1">Address</label><br>
                                <input type="text"
                                       class="form-control ub-input-item single text form_elem_address"
                                       required name="shipping_address1"
                                       id="shipping_address1"
                                       value=""
                                       placeholder="Street Address*"
                                       data-toggle="tooltip" data-placement="auto left"
                                       title="Address" data-validation="required" maxlength="35">
                                <div id="poBoxWarning" style="display:none;color:red;font-weight:700;">Please enter an address that is not a PO Box.</div>
                            </div>
                            <div class="spacer">&nbsp;</div>
                            <div class="col-12">
                                <label for="shipping_city">City</label><br>
                                <input type="text"
                                       class="form-control ub-input-item single text form_elem_city"
                                       required
                                       name="shipping_city"
                                       value=""
                                       placeholder="City/Town*"
                                       data-toggle="tooltip" data-placement="auto left"
                                       title="City"
                                       data-validation="required">
                            </div>
                            <div class="spacer">&nbsp;</div>
                            <div class="col">
                                <label for="shipping_state">State</label><br>
                                <select name="shipping_state"
                                        data-value=""
                                        required id="ShippingState"
                                        class="form-control ub-input-item single text form_elem_state"
                                        data-toggle="tooltip" data-placement="auto left"
                                        title="State" data-validation="required">
                                    <option value="" disabled selected>Select State</option>
                                    <option value='AL' >Alabama</option><option value='AK' >Alaska</option><option value='AZ' >Arizona</option><option value='AR' >Arkansas</option><option value='CA' >California</option><option value='CO' >Colorado</option><option value='CT' >Connecticut</option><option value='DE' >Delaware</option><option value='DC' >District of Columbia</option><option value='FL' >Florida</option><option value='GA' >Georgia</option><option value='HI' >Hawaii</option><option value='ID' >Idaho</option><option value='IL' >Illinois</option><option value='IN' >Indiana</option><option value='IA' >Iowa</option><option value='KS' >Kansas</option><option value='KY' >Kentucky</option><option value='ME' >Maine</option><option value='MD' >Maryland</option><option value='MA' >Massachusetts</option><option value='MI' >Michigan</option><option value='MN' >Minnesota</option><option value='MO' >Missouri</option><option value='MT' >Montana</option><option value='NE' >Nebraska</option><option value='NV' >Nevada</option><option value='NH' >New Hampshire</option><option value='NJ' >New Jersey</option><option value='NM' >New Mexico</option><option value='NY' >New York</option><option value='NC' >North Carolina</option><option value='ND' >North Dakota</option><option value='OH' >Ohio</option><option value='OK' >Oklahoma</option><option value='OR' >Oregon</option><option value='PA' >Pennsylvania</option><option value='RI' >Rhode Island</option><option value='SC' >South Carolina</option><option value='SD' >South Dakota</option><option value='TN' >Tennessee</option><option value='TX' >Texas</option><option value='UT' >Utah</option><option value='VT' >Vermont</option><option value='VA' >Virginia</option><option value='WA' >Washington</option><option value='WV' >West Virginia</option><option value='WI' >Wisconsin</option><option value='WY' >Wyoming</option>                                </select>
                            </div>
                            <div class="col">
                                <label for="shipping_zipcode">Zipcode</label><br>
                                <input id="zip" type="text"
                                       class="form-control ub-input-item single text form_elem_zip_code"
                                       required
                                       name="shipping_zipcode"
                                       value=""
                                       placeholder="Zipcode*"
                                       data-toggle="tooltip" data-placement="auto left"
                                       title="00000 or 00000-0000" data-validation="required"
                                       minlength="5" maxlength="10" pattern="[0-9]{5}(-[0-9]{4})?">
                                <input type="hidden" name="shipping_country" value="US" />
                            </div>
                            <div class="spacer"></div><div class="spacer"></div><h4>Create your Patient Portal Password:</h4>
<div class="spacer"></div>
<div class="col">
    <label for="password">Create Password</label><br>
    <input type="text" class="form-control duplicated-input" id="psw" name="password" data-pair="psw2" data-warning="passWarning" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^*])[A-Za-z\d!@#$%^*]{8,}" title="Must contain at least one number, one uppercase and lowercase letter, one special character, and at least 8 or more characters" value="" required>
</div>
<div class="col">
    <label for="password_verification">Confirm Password</label><br>
    <input type="text" id="psw2" name="password_verification" class="form-control duplicated-input" data-pair="psw" data-warning="passWarning" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^*])[A-Za-z\d!@#$%^*]{8,}" title="Must contain at least one number, one uppercase and lowercase letter, one special character, and at least 8 or more characters" value="" required>
</div>

<div id="message">
    <span>Password must contain the following:</span><br><br>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="special" class="invalid">A <b>special character</b> (!@#$%^*)</p>
    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
    <p id="invalidChars" class="valid"><b>Invalid characters found:</b> <span id="invalidCharsFound">None</span></p>
</div>
<div id="passWarning" style="display:none;color:red;font-weight:700;">The passwords you entered do not match. Please check and ensure both entries are the same.</div>
<script>
    var passwordInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var special = document.getElementById("special");
    var length = document.getElementById("length");
    var invalidChars = document.getElementById("invalidChars");
    var invalidCharsFound = document.getElementById("invalidCharsFound");
    var submitButton = document.getElementById('btnSubmit');
    var passwordMessage = document.getElementById("message");


    // When the user clicks on the password field, show the message box
    passwordInput.onfocus = function() {
        passwordMessage.style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    passwordInput.onblur = function() {
        passwordMessage.style.display = "none";
    }

    // When the user starts to type something inside the password field
    passwordInput.onkeyup = function() {
        var valid = true;
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(passwordInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            valid = false;
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(passwordInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            valid = false;
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(passwordInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            valid = false;
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate special characters
        var specials = /[!@#$%^*]/g;
        if(passwordInput.value.match(specials)) {
            special.classList.remove("invalid");
            special.classList.add("valid");
        } else {
            valid = false;
            special.classList.remove("valid");
            special.classList.add("invalid");
        }

        // Validate length
        if(passwordInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            valid = false;
            length.classList.remove("valid");
            length.classList.add("invalid");
        }

        // Display any invalid characters
        var allowedCharacters = /[a-zA-Z0-9!@#$%^*]/g;
        var invalidCharactersFound = passwordInput.value;
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
</script>                            <div class="spacer">&nbsp;</div>
                            <div class="col">
                                <input type="checkbox" name="dm_mailing_list" value="yes" style="opacity:1;position:relative;">
                                                                    I would like to join the Weight Loss Advocates mailing list for email updates &amp; special offers.
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
    <div class="footer-badge"><a href="https://www.legitscript.com/websites/?checker_keywords=theweightlossadvocates.com" target="_blank" title="Verify LegitScript Approval for www.theweightlossadvocates.com"><img src="../assets/img_from_site/183773.png" alt="Verify Approval for www.theweightlossadvocates.com" width="73" height="79" /></a></div>
</form>
<div class="footer"><center><a href="terms.php">Terms & Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a href="terms.php#refunds">Refund Policy</a> | <a href="https://Weight Loss Advocates.everflowclient.io/affiliate/signup" target="_blank" rel="nofollow">Affiliates</a> | <a href="contact.php">Contact Us</a> <br><br>Weight Loss Advocates, LLC</center></div><br><br><br><script type="text/javascript" src="../assets/js_from_site/jquery-1.12.1.min.js"></script>
<script>
</script>
<script src="../assets/js_from_site/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script>
    function initAutocomplete() {
        var addressInput = document.getElementById('shipping_address1');
        var autocomplete = new google.maps.places.Autocomplete(addressInput, {
            types: ['address'],
            componentRestrictions: { country: 'US' }
        });

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.address_components) {
                return;
            }

            var address = {
                street_number: '',
                route: '',
                locality: '',
                administrative_area_level_1: '',
                postal_code: '',
            };

            place.address_components.forEach(function(component) {
                var type = component.types[0];
                if (type === 'street_number') {
                    address.street_number = component.long_name;
                } else if (type === 'route') {
                    address.route = component.long_name;
                } else if (type === 'locality') {
                    document.querySelector('[name="shipping_city"]').value = component.long_name;
                } else if (type === 'administrative_area_level_1') {
                    document.querySelector('[name="shipping_state"]').value = component.short_name;
                } else if (type === 'postal_code') {
                    document.querySelector('[name="shipping_zipcode"]').value = component.long_name;
                }
            });
            addressInput.value = (address.street_number + ' ' + address.route).trim();
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY&libraries=places&callback=initAutocomplete" async defer></script>

<script>
    var submitButton = document.getElementById('btnSubmit');
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
</script>
</body>
</html>
