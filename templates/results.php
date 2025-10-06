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
    <title>CONGRATULATIONS!</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"
         >
    <link href="../assets/css/qualify.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
    <script type="text/javascript" src="../assets/js/everflow.js"></script>
<script src="../assets/js/smartlook.js"></script>
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
    _paq.push(["setCookieDomain", "*.theweightlossadvocates.com"]);
    _paq.push(["setDomains", ["*.theweightlossadvocates.com","*.app.theweightlossadvocates.com"]]);
                _paq.push(['setCustomDimension', 4, 'cid-68e274b7b12a4c705a1b37d9825d2b7f']);    _paq.push(["enableCrossDomainLinking"]);
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
            'customer_id': 'cid-68e274b7b12a4c705a1b37d9825d2b7f',
            'last_touch_channel': '',
            'offer_slug': 'dm-offers',
            'page': 'results'
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
  <form>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container justify-content-center">
            <img src="../assets/images/logo-dk.png" alt="Weight Loss Advocates" width='60px' class="img-fluid">
        </div>
    </nav>
    <section class="container intersticial">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12">
                <div class="spacer">&nbsp;</div>
                <div class="spacer">&nbsp;</div>
                <div class="spacer">&nbsp;</div>
                <center><h1>CONGRATULATIONS!</h1></center>
                <center><h3 style="font-weight:300;color:#c8cdfa;">Welcome to the Weight Loss Advocates GLP-1 Weight Loss Prescription
                        plan!</h3></center>
                <br>
                <p class="text-center">Your authorization is reserved for: <span id="timer" class="textalt">10:00</span></p>
                <br>
                <div class="row stats">
                    <div class="col stats-item">
                        <center>
                            Current Wght<br>
                            <h1><?php echo isset($intake_weight) ? $intake_weight : ''; ?> lbs</h1>
                        </center>
                    </div>
                    <div class="col stats-item">
                        <center>
                            Your Age<br>
                            <h1>
                                <?php
                                if (isset($intake_dob_year) && isset($intake_dob_month) && isset($intake_dob_day)) {
                                    $dob = new DateTime($intake_dob_year . '-' . $intake_dob_month . '-' . $intake_dob_day);
                                    $today = new DateTime();
                                    echo $today->diff($dob)->y;
                                }
                                ?>
                            </h1>
                        </center>
                    </div>
                    <div class="col stats-item">
                        <center>
                            Goal Wght<br>
                            <h1>
                                <?php
                                if (isset($intake_goal_weight)) {
                                    $goal_weight = $intake_goal_weight;
                                    echo $goal_weight;
                                }
                                ?> lbs
                            </h1>
                        </center>
                    </div>
                </div>
                <img src="../assets/images/graph-product.png" class="img-fluid">
                <br><br>
                <div class="row stats">
                    <div class="col stats-item">
                        <center>
                            You're all set to lose<br>
                            <h1>
                                <?php
                                if (isset($intake_weight) && isset($goal_weight)) {
                                    $weight_to_lose = $intake_weight - $goal_weight;
                                    echo $weight_to_lose;
                                }
                                ?> lbs!
                            </h1>
                        </center>
                    </div>
                </div>

                <br><br>
                <h3 style="font-weight:300;text-align: center;">You are about to join thousands losing weight with
                    Semaglutide & Tirzepatide.</h3>
                <span class="textalt"><center>The same ingredients in (Ozempic® & Mounjaro®)</center></span>
                <div class="spacer">&nbsp;</div>
                <div class="row">
                    <style> .inversebg div {
                            color: #000 !important;
                            font-weight: normal;
                        }</style>
                    <div class="col">
                        <div class="inversebg">
                            <div class="inversehdr"><h2>What's Next:</h2></div>
                            <div class="inverseinner">

                                <div><h1><span style="color:#51B3FA">1.</span> <span style="font-size:21px;font-family:'Poppins', sans-serif;font-weight:bold;">Select Your Prescription:</span></h1>
                                    <p style="font-weight:300 !important;">You'll choose between Semaglutide & Tirzepatide and injections or oral drops on the next step.</p>

                                </div>
                                <div><h1><span style="color:#51B3FA">2.</span> <span style="font-size:21px;font-family:'Poppins', sans-serif;font-weight:bold;">Authorize Your Card:</span></h1>
                                    <p style="font-weight:300 !important;">These medications are in high demand. We will need to authorize your card today to secure your medication and telemed appointment. (If your prescription is not approved, you will receive a full refund.)</p>

                                </div>

                                <div><h1><span style="color:#51B3FA">3.</span> <span style="font-size:21px;font-family:'Poppins', sans-serif;font-weight:bold;">Complete The Medical Intake:</span></h1>
                                    <p style="font-weight:300 !important;">Once your payment is made, you will be directed to your Weight Loss Advocates patient portal and complete a few medical questions for the doctor.
                                    </p>

                                </div>

                                <div><h1><span style="color:#51B3FA">4.</span> <span style="font-size:21px;font-family:'Poppins', sans-serif;font-weight:bold;">Doctor's Review:</span></h1>
                                    <p style="font-weight:300 !important;">The doctor will review your chart by <strong style="font-weight:600;color:#9638c2">10/06/2025                                        </strong>. (Usually within 5 hours including weekends.)

                                    </p>

                                </div>
                                <div><h1><span style="color:#51B3FA">5.</span> <span style="font-size:21px;font-family:'Poppins', sans-serif;font-weight:bold;">Approval and Shipping:</span></h1>
                                    <p style="font-weight:300 !important;">Once approved, our FDA-registered pharmacy will ship your ice-packed medication with UPS next-day rush delivery. Orders ship same day, except Fridays. A tracking number will be provided to your email address when your medication ships.

                                    </p>

                                </div>

                                <div><center><h2><span style="color:#51B3FA;font-size:80%;font-family:Poppins;">YOUR EXPECTED DELIVERY DATE IS</span><br/> <span style="font-size:21px;">Wednesday, October 8!</span></h2></center>
                                    <p style="font-weight:300 !important;">
                                    </p>

                                </div>
                                <hr>
                                <div> <div><i class="bi bi-ban icopk"></i> No Monthly Membership Fees<br> <i class="bi bi-ban icopk"></i> No Hidden Fees <br><i class="bi bi-check icopk"></i> HSA Accepted</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <h1>
                    <center>Next step is to choose your preferred medication</center>
                </h1>
                <br>
                <div class="row">
                    <div>
                        <a href="register.php">
                            <div class="d-grid gap-2">
                                <button class="btn ctaBtn1" type="button">
                                   Select My Medication <i class="bi bi-arrow-right-short"></i>
                                </button>
                            </div>
                        </a><br>

                        <br>
                    </div>
                    <section class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-3">
                                <center>

                                    <div class="col-sm-12 rating-wht">
                                        <strong>4.8</strong> <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><br>
                                         <span style="font-size:12px;color:#b8f0fa;">Customers rate Weight Loss Advocates 5 Stars for all-inclusive pricing, speed of delivery & product effectiveness.</span>
                                        <br><br>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="squares">
                    <div class="row">

                        <div class="col-3">
                            <center>
                                <img src="img/guarantee.png" class="img-fluid">
                            </center>
                        </div>
                        <div class="col my-auto">


                           <h4>Patient Satisfaction Guarantee</h4>
                         <p class="textalt2" style="font-size:12px;">Your satisfaction and success are our priority. If you decide before your prescription ships that our program isn’t for you, we’ll cancel your order and provide a full refund. While we cannot process refunds once your prescription has been shipped, our expert staff has lots of options at their disposal to help you hit your weightloss goal and you can cancel future shipments at any time. </p>

                        </div>

                    </div>
                </div>

                <div class="squares">
                    <img src="img/products-mobi-2.png" class="img-fluid">
                    <div class="spacer">&nbsp;</div>
                    <div class="row">
                        <div class="col sq1">
                            <i class="bi bi-arrow-down-right"></i>
                            <h1>15%</h1>
                            <p>Average reduction in body weight</p>
                        </div>
                        <div class="col sq2">
                            <i class="bi bi-chat-heart"></i>
                            <h1>8/10</h1>
                            <p>Users say this is more effective than anything the’ve ever tried</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col sq3">
                            <i class="bi bi-hourglass"></i>
                            <h1>6"</h1>
                            <p>Average reduction in waist size</p>
                        </div>
                        <div class="col sq4">
                            <span class="altpink"></span><i class="bi bi-emoji-heart-eyes"></i>
                            <h1>92%</h1>
                            <p>Users have achieved lasting weight loss</p>
                        </div>
                    </div>

                </div>


                <div class="spacer">&nbsp;</div>
                <div class="spacer">&nbsp;</div>
                <br>
                <div class="row">

                    <div>
                        <center><h4>We're Ready for you</h4></center>
                        <br><br>
                        <a href="register.php">
                            <div class="d-grid gap-2">
                                <button class="btn ctaBtn1" type="button">
                                Select My Medication <i class="bi bi-arrow-right-short"></i>
                                </button>
                            </div>
                        </a><br>

                        <br>
                    </div>
                    <section class="container">
                        <div class="row">
                            <div class="col-xl-4 offset-xl-4">
                                <center>

                                    <div class="col-sm-12 rating-wht">
                                        <strong>4.8</strong> <i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><br>

                                        <br><br>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="row">

                    <div class="col-12 testimonial">
                        <b>The Missing Key</b>
                        <div class="starsrow">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                        </div>
                        <p>Finishing my first round of Semaglutide (6weeks) and i am thrilled with the results. It’s as if the Rx was the missing key to make all other efforts effective (years of dieting, exercise, hiking, biking, and recently IF, and keto). I started at 240 and have consistently let go of a couple pounds a week. Starting the second round and couldn’t be happier with it overall.</p>

                    </div>
                    <div class="col-12 testimonial">
                        <b>Nothing less than a miracle</b>
                        <div class="starsrow">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                        </div>
                        <p>Just took my third shot. I am 60 years old, female, 5'7'', and weigh 295. I lost 5 pounds by the 2nd shot. Maybe that's not terribly impressive, but I don't want to lose quickly. Here's what I think is an absolute miracle with Tirzepatide: NO HEAD HUNGER! For the first time (probably in my life), I don't think about food. I don't crave junk food, I get full very quickly and can only eat small amounts. I had a gastric sleeve 6 years ago (at that time was 350 pounds) and it did a rotten job. It stretched out very quickly and never got rid of the obsessive food thoughts. This Tirzepatide is something else. I wonder if this is how thin people eat? lol I have had a bit of stomach upset once in a while, but for the most part, I am excited to start my higher dose next week. Even if I never lose what I want to, I am so grateful for this drug because I am eating all healthy foods. Nothing less than a miracle if you ask me!</p>

                    </div>
                    <div class="col-12 testimonial">
                        <b>Down 15 lbs!</b>
                        <div class="starsrow">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                        </div>
                        <p>I started Tirzepatide weighing 200.5 lbs. I used to work out 3-5 days per week but was not losing weight. I am down 15 lbs and have lost all cravings. I listen to my body and eat when I am hungry. I have zero side effects.</p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 testimonial">
                        <b>I am so happy with it</b>
                        <div class="starsrow">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                        </div>
                        <p>I have lost a total of 115 lbs. I don’t just eat whatever I want though; I have mainly been eating chicken, eggs, and turkey with things like cauliflower rice and once a week regular rice. I have gone from being 455 lbs to my current weight of 340 lbs. Also, something awesome, I have gone from a size 62 waist in pants to now a 52. I am so happy with it. </p>

                    </div>
                    <div class="col-12 testimonial">
                        <b>Tirzepatide is the most amazing weight loss medication ever made </b>
                        <div class="starsrow">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                        </div>
                        <p>I started using tirzepatide in July 2022 and weighed 206 lbs. 63 years old and 5'3. It is now March 2023 and I now weigh 130 lbs. The Tirzepatide eliminated the desire to eat. I never felt hungry and nothing sounded good, so it was easy to make myself eat only very light meals, more like snacks of fruit, throughout the day. When I say 'make myself' eat I am being literal and could easily have gone without eating at all, but know that isn't healthy. I have experienced a little hair loss, likely due to a lack of nutrients, but it is now growing back. There is an adjustment period to the oddity of food no longer being appealing. No cravings or temptations at all. I believe tirzepatide is the most amazing weight loss medication ever made. I had no side effects other than mild constipation, but nothing that dried prunes couldn't cure. I had tried Semaglutide quite some time before the Tirzepatide, but the side effects of fatigue and nausea prevented me from continuing. </p>

                    </div>
                    <div class="col-12 testimonial">
                        <b>Don't be afraid to try it!</b>
                        <div class="starsrow">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                        </div>
                        <p>I started Tirzepatide 2 weeks ago, so ready for my third injection tomorrow. I’ve lost 4 lbs in the first 2 weeks. I’ve had no side effects whatsoever so far. I’m on the 2.5 initial dose. I am 64 yo and need to lose 50 lbs. I think it’s an amazing drug. I don’t feel hungry all the time, no thoughts of eating or snacking, NO MORE CARB CRAVINGS, and find it’s very easy now to eat super healthy foods. I am eating very small portions, and I think that makes a big difference as far as having side effects. I’ll check back in after I increase my dose, but I want others to hear that not everyone has side effects. Don’t be afraid to try it and don’t let some reviews scare you so much that you refuse it. It’s a fantastic experience so far, for me.</p>

                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="spacer">&nbsp;</div>

            </div>
        </div>
    </section>
    <!-- Testimonials -->
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://player.vimeo.com/api/player.js"></script>
<style>
    /* Vertical video slider (9:16) */
    .vimeo-carousel { width: 100%; }
    .vimeo-carousel .swiper-slide { display: flex; justify-content: center; }
    .vimeo-card { width: 100%; max-width: 360px; border-radius: 16px; overflow: hidden; background: #000; }
    .vimeo-frame { position: relative; width: 100%; aspect-ratio: 9 / 16; }
    .vimeo-frame iframe { position: absolute; inset: 0; width: 100%; height: 100%; border: 0; }
    .vimeo-meta { padding: 10px 12px; background: #fff; color: #111; font-size: 14px; }
    .vimeo-meta .name { font-weight: 600; }
    /* Swiper controls */
    .vimeo-carousel .swiper-pagination { position: relative; margin-top: 10px; }
    .vimeo-carousel .swiper-button-prev,
    .vimeo-carousel .swiper-button-next { color: #fff; }

    @media (min-width: 768px) {
        .vimeo-card { max-width: 320px; }
    }
</style>
<style>
    /* Loading spinner for Vimeo frames */
    .vimeo-frame { position: relative; }
    .vimeo-frame .vimeo-spinner { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; pointer-events: none; }
    .vimeo-frame .vimeo-spinner .spinner-dot { width: 44px; height: 44px; border-radius: 50%; border: 3px solid rgba(255,255,255,0.35); border-top-color: #ffffff; animation: vimeo-spin 0.9s linear infinite; }
    @keyframes vimeo-spin { to { transform: rotate(360deg); } }
</style>
<section id="video-testimonials" class="video-testimonials-section py-10">
    <div class="max-w-7xl mx-auto">
        <div class="swiper vimeo-carousel">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123949957" data-title="Customer 1"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123958880" data-title="Customer 6"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123965031" data-title="Customer 7"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123964421" data-title="Customer 8"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123986623" data-title="Customer 11"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123988338" data-title="Customer 12"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123982301" data-title="Customer 9"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123948862" data-title="Customer 2"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123944535" data-title="Customer 4"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123946072" data-title="Customer 5"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123947633" data-title="Customer 3"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vimeo-card">
                        <div class="vimeo-frame" data-vimeo-id="1123984693" data-title="Customer 10"></div>
                    </div>
                </div>

            </div>
            <br>
            <!-- Controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div> <!-- end .swiper -->
    </div>
</section>
<script>
    (function() {
        // Build Vimeo players lazily
        const frames = Array.from(document.querySelectorAll('#video-testimonials .vimeo-frame'));
        const players = [];

        // Compute the video aspect and vertically center the iframe inside a fixed 9:16 frame
        async function centerIframeVertically(player, frameEl) {
            const iframe = frameEl.querySelector('iframe');
            if (!iframe) return;

            try {
                const [vw, vh] = await Promise.all([player.getVideoWidth(), player.getVideoHeight()]);
                if (!vw || !vh) return;

                const cw = frameEl.clientWidth;
                const ch = frameEl.clientHeight; // fixed 9:16 by CSS
                const contentHeight = Math.round((vh / vw) * cw);

                // Base iframe styles
                iframe.style.position = 'absolute';
                iframe.style.left = '0';
                iframe.style.width = '100%';
                iframe.style.transform = 'none';

                if (contentHeight >= ch) {
                    // Video is taller than the frame: fill height
                    iframe.style.height = '100%';
                    iframe.style.top = '0';
                } else {
                    // Video is shorter than the frame: set actual height and center with exact offset
                    const offset = Math.round((ch - contentHeight) / 2);
                    iframe.style.height = contentHeight + 'px';
                    iframe.style.top = offset + 'px';
                }
            } catch (e) {
                /* no-op */
            }
        }

        function buildPlayerFor(el) {
            if (el.dataset.playerBuilt) return; // idempotent
            const vimeoId = el.getAttribute('data-vimeo-id');
            const title = el.getAttribute('data-title') || '';

            // Add spinner overlay
            let spinner = el.querySelector('.vimeo-spinner');
            if (!spinner) {
                spinner = document.createElement('div');
                spinner.className = 'vimeo-spinner';
                const dot = document.createElement('div');
                dot.className = 'spinner-dot';
                spinner.appendChild(dot);
                el.appendChild(spinner);
            }

            const options = {
                id: vimeoId,
                responsive: true,
                autopause: true,
                autoplay: false,
                byline: false,
                portrait: false,
                title: false,
                controls: true,
                muted: false
            };

            const p = new Vimeo.Player(el, options);
            el._playerRef = p;

            // Hide spinner once metadata is loaded / playback ready
            const hideSpinner = () => { if (spinner) spinner.style.display = 'none'; };
            const showSpinner = () => { if (spinner) spinner.style.display = 'flex'; };

            p.on('loaded', hideSpinner);
            p.on('bufferend', hideSpinner);
            p.on('bufferstart', showSpinner);
            p.on('play', () => {
                // Pause all other players when one starts
                players.forEach(other => { if (other !== p) other.pause().catch(()=>{}); });
            });
            p.on('error', (e) => {
                if (spinner) spinner.innerHTML = '<span style="color:#fff;font-size:12px;text-align:center;padding:8px 10px;background:rgba(0,0,0,0.6);border-radius:8px;">Video unavailable</span>';
            });

            // Center on load and when player signals readiness
            p.on('loaded', () => centerIframeVertically(p, el));
            // Re-center on play just in case controls/metrics shift heights
            p.on('play', () => centerIframeVertically(p, el));

            players.push(p);
            el.dataset.playerBuilt = '1';
        }

        // Init Swiper with eager slide building for all visible slides and responsive updates
        const vimeoSwiper = new Swiper('.vimeo-carousel', {
            slidesPerView: 1.1,
            spaceBetween: 16,
            centeredSlides: true,
            loop: false,
            watchOverflow: true,
            keyboard: { enabled: true },
            a11y: { enabled: true },
            pagination: {
                el: '.vimeo-carousel .swiper-pagination',
                clickable: true,
                dynamicBullets: true
            },
            navigation: {
                nextEl: '.vimeo-carousel .swiper-button-next',
                prevEl: '.vimeo-carousel .swiper-button-prev'
            },
            breakpoints: {
                640: { slidesPerView: 1.2, spaceBetween: 18 },
                768: { slidesPerView: 2.2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 24, centeredSlides: false },
                1280: { slidesPerView: 4, spaceBetween: 24, centeredSlides: false },
                1536: { slidesPerView: 4, spaceBetween: 28, centeredSlides: false }
            },
            on: {
                init(swiper) {
                    buildVisibleNow(swiper);
                },
                slideChange(swiper) {
                    // Pause others and build any newly visible
                    players.forEach(p => p.pause().catch(()=>{}));
                    buildVisibleNow(swiper);
                },
                transitionEnd(swiper) {
                    buildVisibleNow(swiper);
                },
                resize(swiper) {
                    buildVisibleNow(swiper);
                }
            }
        });

        // Helper: build players for all frames that are actually visible in the viewport of this Swiper
        function buildVisibleNow(swiper) {
            const containerRect = swiper.el.getBoundingClientRect();
            swiper.slides.forEach(slide => {
                const rect = slide.getBoundingClientRect();
                const horizontallyVisible = rect.right > containerRect.left && rect.left < containerRect.right;
                const verticallyVisible = rect.bottom > containerRect.top && rect.top < containerRect.bottom;
                if (horizontallyVisible && verticallyVisible) {
                    const frame = slide.querySelector('.vimeo-frame');
                    if (frame) {
                        if (!frame.dataset.playerBuilt) {
                            buildPlayerFor(frame);
                        } else if (frame._playerRef) {
                            centerIframeVertically(frame._playerRef, frame);
                        }
                    }
                }
            });
        }

        // Re-center all visible players on window resize (debounced)
        let _resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(_resizeTimer);
            _resizeTimer = setTimeout(() => {
                document.querySelectorAll('#video-testimonials .vimeo-frame').forEach(frame => {
                    const idx = Array.from(document.querySelectorAll('#video-testimonials .vimeo-frame')).indexOf(frame);
                    const player = players[idx];
                    if (player) centerIframeVertically(player, frame);
                });
            }, 120);
        });
    })();
</script>
<!-- Testimonials -->    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="squares" style="color:#CADFF3;">

                    <div class="row">

                        <div class="col terms">
                            <!--<div class="row">
                                <div class="col">
                                    <div class="footer"><center><a href="terms.php">Terms & Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a href="terms.php#refunds">Refund Policy</a> | <a href="https://Weight Loss Advocates.everflowclient.io/affiliate/signup" target="_blank" rel="nofollow">Affiliates</a> | <a href="contact.php">Contact Us</a> <br><br>Weight Loss Advocates, LLC</center></div><br><br><br>                                    <br><br></div>
                            </div>-->
                            <p> *Results vary based on starting weight and program adherence. Inches lost from hips,
                                waist, chest, thighs and arms in the first month.</p>


                            <p>
                                Results from RX Path may vary. Medication prescriptions are at the discretion of medical
                                providers and may not be suitable for everyone. Our Prescription plans typically result
                                in 1-2 lbs per week weight loss in 4 weeks, involving a healthy diet and exercise
                                changes. Consult a healthcare professional before using RX Path or starting any weight
                                loss program.
                                *Based on the average weight loss in three 68-week clinical trials of patients without
                                diabetes who reached and maintained a dose of 2.4 mg/week of treatment, along with a
                                reduced-calorie diet and increased physical activity. See details.
                                Medication is included in the cost of the Weight Loss Advocates Program.
                                The trademarks, service
                                marks, trade names (Wegovy® ,Ozempic®), and products displayed on this Internet site are
                                protected and belong to their respetive owners.</p>
                            <p>
                                Medical treatment is provided and approved by a Medical Doctor. </p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>


<script>
    confetti({
        particleCount: 100,
        spread: 70,
        origin: {y: 0.6},
    });

    window.onload = function () {
        confetti();

        const count = 200,
            defaults = {
                origin: {y: 0.7},
            };

        function fire(particleRatio, opts) {
            confetti(
                Object.assign({}, defaults, opts, {
                    particleCount: Math.floor(count * particleRatio),
                })
            );
        }

        fire(0.25, {
            spread: 26,
            startVelocity: 55,
        });

        fire(0.2, {
            spread: 60,
        });

        fire(0.35, {
            spread: 100,
            decay: 0.91,
            scalar: 0.8,
        });

        fire(0.1, {
            spread: 120,
            startVelocity: 25,
            decay: 0.92,
            scalar: 1.2,
        });

        fire(0.1, {
            spread: 120,
            startVelocity: 45,
        });
    };

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
<script src="../assets/js/bootstrap.bundle.min.js"

       ></script>
<script>
    /*! lozad.js - v1.5.0 - 2018-07-16 https://github.com/ApoorvSaxena/lozad.js Apoorv Saxena; Licensed MIT */
    !function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.lozad=e()}(this,function(){"use strict";function t(t){t.setAttribute("data-loaded",!0)}var e=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var r=arguments[e];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(t[n]=r[n])}return t},r=document.documentMode,n={rootMargin:"0px",threshold:0,load:function(t){if("picture"===t.nodeName.toLowerCase()){var e=document.createElement("img");r&&t.getAttribute("data-iesrc")&&(e.src=t.getAttribute("data-iesrc")),t.getAttribute("data-alt")&&(e.alt=t.getAttribute("data-alt")),t.appendChild(e)}t.getAttribute("data-src")&&(t.src=t.getAttribute("data-src")),t.getAttribute("data-srcset")&&(t.srcset=t.getAttribute("data-srcset")),t.getAttribute("data-background-image")&&(t.style.backgroundImage="url('"+t.getAttribute("data-background-image")+"')")},loaded:function(){}},o=function(t){return"true"===t.getAttribute("data-loaded")};return function(){var r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:".lozad",a=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},i=e({},n,a),d=i.rootMargin,u=i.threshold,c=i.load,s=i.loaded,g=void 0;return window.IntersectionObserver&&(g=new IntersectionObserver(function(e,r){return function(n,a){n.forEach(function(n){n.intersectionRatio>0&&(a.unobserve(n.target),o(n.target)||(e(n.target),t(n.target),r(n.target)))})}}(c,s),{rootMargin:d,threshold:u})),{observe:function(){for(var e=function(t){return t instanceof Element?[t]:t instanceof NodeList?t:document.querySelectorAll(t)}(r),n=0;n<e.length;n++)o(e[n])||(g?g.observe(e[n]):(c(e[n]),t(e[n]),s(e[n])))},triggerLoad:function(e){o(e)||(c(e),t(e),s(e))}}}});
</script>
<script>
    window.lazyLoad = lozad('.lazyload' );
    window.lazyLoad.observe();
</script><script>
    smartlook('identify', 'cid-68e274b7b12a4c705a1b37d9825d2b7f', {
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
        'external_customer_id': 'cid-68e274b7b12a4c705a1b37d9825d2b7f',
        'source_id': '',
        'everflow_uid': '',
        'page': 'results',
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
            Adv1: 'cid-68e274b7b12a4c705a1b37d9825d2b7f',
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
        let eventId = null;
        let advEventId = null;
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
            adv1: 'cid-68e274b7b12a4c705a1b37d9825d2b7f',
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
                etSubmitData['event_key'] = 'invalid_event';
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
</body>
</html>
