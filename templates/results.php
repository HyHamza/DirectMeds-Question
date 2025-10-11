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
                                    <p style="font-weight:300 !important;">The doctor will review your chart by <strong id="review-date" style="font-weight:600;color:#9638c2"></strong>. (Usually within 5 hours including weekends.)

                                    </p>

                                </div>
                                <div><h1><span style="color:#51B3FA">5.</span> <span style="font-size:21px;font-family:'Poppins', sans-serif;font-weight:bold;">Approval and Shipping:</span></h1>
                                    <p style="font-weight:300 !important;">Once approved, our FDA-registered pharmacy will ship your ice-packed medication with UPS next-day rush delivery. Orders ship same day, except Fridays. A tracking number will be provided to your email address when your medication ships.

                                    </p>

                                </div>

                                <div><center><h2><span style="color:#51B3FA;font-size:80%;font-family:Poppins;">YOUR EXPECTED DELIVERY DATE IS</span><br/> <span id="delivery-date" style="font-size:21px;"></span></h2></center>
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
                                <img src="../assets/images/guarantee.png" class="img-fluid">
                            </center>
                        </div>
                        <div class="col my-auto">


                           <h4>Patient Satisfaction Guarantee</h4>
                         <p class="textalt2" style="font-size:12px;">Your satisfaction and success are our priority. If you decide before your prescription ships that our program isn’t for you, we’ll cancel your order and provide a full refund. While we cannot process refunds once your prescription has been shipped, our expert staff has lots of options at their disposal to help you hit your weightloss goal and you can cancel future shipments at any time. </p>

                        </div>

                    </div>
                </div>

                <div class="squares">
                    <img src="../assets/images/products-mobi-2.png" class="img-fluid">
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
   // Timer function
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

// Combined window.onload - fires both confetti and timer
window.onload = function () {
    

    // Start the timer
    const tenMinutes = 60 * 10,
        display = document.querySelector('#timer');
    startTimer(tenMinutes, display);
};



// Calculate review and delivery dates
document.addEventListener('DOMContentLoaded', function() {
    // Calculate and display the review date
    const reviewDateElement = document.getElementById('review-date');
    if (reviewDateElement) {
        const now = new Date();
        now.setHours(now.getHours() + 5);
        const reviewDate = now.toLocaleDateString('en-US', {
            month: '2-digit',
            day: '2-digit',
            year: 'numeric'
        });
        reviewDateElement.textContent = reviewDate;
    }

    // Calculate and display the delivery date
    const deliveryDateElement = document.getElementById('delivery-date');
    if (deliveryDateElement) {
        const deliveryDate = new Date();
        deliveryDate.setDate(deliveryDate.getDate() + 5);
        const deliveryDay = deliveryDate.toLocaleDateString('en-US', { weekday: 'long' });
        const deliveryMonth = deliveryDate.toLocaleDateString('en-US', { month: 'long' });
        const deliveryDayOfMonth = deliveryDate.getDate();
        deliveryDateElement.textContent = `${deliveryDay}, ${deliveryMonth} ${deliveryDayOfMonth}!`;
    }
});
</script>
<script src="../assets/js/bootstrap.bundle.min.js"

       ></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Calculate and display the review date
        const reviewDateElement = document.getElementById('review-date');
        if (reviewDateElement) {
            const now = new Date();
            now.setHours(now.getHours() + 5);
            const reviewDate = now.toLocaleDateString('en-US', {
                month: '2-digit',
                day: '2-digit',
                year: 'numeric'
            });
            reviewDateElement.textContent = reviewDate;
        }

        // Calculate and display the delivery date
        const deliveryDateElement = document.getElementById('delivery-date');
        if (deliveryDateElement) {
            const deliveryDate = new Date();
            deliveryDate.setDate(deliveryDate.getDate() + 5);
            const deliveryDay = deliveryDate.toLocaleDateString('en-US', { weekday: 'long' });
            const deliveryMonth = deliveryDate.toLocaleDateString('en-US', { month: 'long' });
            const deliveryDayOfMonth = deliveryDate.getDate();
            deliveryDateElement.textContent = `${deliveryDay}, ${deliveryMonth} ${deliveryDayOfMonth}!`;
        }
    });
</script>

</body>
</html>
