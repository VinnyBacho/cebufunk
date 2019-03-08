<?php
session_start();
include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous"
    />
    <title>Cebu Funk</title>
</head>

<body>
<!-- Showcase & Nav -->
<div id="showcase">
    <header>
        <nav class="cf">
            <ul class="cf">
                <li>
                    <a href="#showcase">Home</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#music">Music</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
            <a href="#" id="openup">CebuFunk</a>
        </nav>
    </header>
    <div class= "container">
        <img alt="" src="img/cebufunk-yelling.jpg" />
        <h1>Cebu Funk</h1>
        <h2>Pianist | Composer | Singer</h2>
    </div>
</div>

<!-- About -->
<section id="about" class="section">
    <div class="container">
        <h2 class="section-head">The Funk Master of Southern California</h2>
            <p class="lead">
                Cebu Funk was born and raised in Seattle, Washington. Originally trained as a classical pianist, Funk
                ultimately found his true passion in jazz, rock, blues, and of course funk. Finding inspiration in
                artists like Stevie Wonder and Tower of Power, Funk takes the stage by storm with his strong groove, electrifying fingers,
                and thunderous personality. Currently, Cebu plays all throughout southern California in studio and live bands.
                He is always looking to perform and will enthrall the crowd with his demeanor and skill.
            </p>
            <img class="mt mb" id="leaning" alt="" src="img/bio-pic.jpg" />
    </div>
</section>

<!-- Music -->
<section id="music" class="section">
    <div class="container">
        <h2 class="section-head"><i class="fas fa-music"></i> Music</h2>
        <p class="lead">
            Whether it's leading from the rhythm section or soloing in center stage, Cebu Funk knows how perform.
            Regardless of your taste, Funk's music is sure to have you smiling and dancing by the end of the set.
        </p>
        <a href="https://www.youtube.com/watch?v=l_BEsZX9QKg&list=PLb5uk6b88e-VwX58xda1WDnR6dbFz--F7" class="btn btn-primary mt mb">See Cebu on YouTube!</a>
        <video class="mt mb hide-on-small" loop="loop" muted="muted" autoplay="autoplay" width="100%" height="600" src="img/Video.MOV">
            <iframe
                    width="60%"
                    height="450px"
                    src="https://www.youtube.com/embed/jBHO54O-e-o?&mute=1&autoplay=1&modestbranding=1&autohide=1&showinfo=0"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>
        </video>
    </div>
</section>

<section id="contact" class="section">
    <div class="container">
        <h2 class="section-head">Contact Cebu</h2>
        <p class="lead">
            Want to book Cebu for an event or get him to gig with you? Reach out to him here or through the social media links below!
        </p>
        <div id="notification" class="lead">
            <?php notification(); ?>
        </div>
        <div class="contact">
            <form action="contact-handler.php" method="POST">
                <p>
                    <label>Name</label>
                    <input type="text" name="name">
                </p>
                <p>
                    <label>Email Address</label>
                    <input type="email" name="email">
                </p>
                <p class="full">
                    <label>Message</label>
                    <textarea name="message" rows="5"></textarea>
                </p>
                <p class="full">
                    <button>Submit</button>
                </p>
            </form>
        </div>
        <div class="social-media">
            <a href="https://www.facebook.com/cebufunk?ref=br_rs" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/FunkCebu" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/cebufunk/" class="fab fa-instagram"></a>
        </div>
    </div>
</section>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"
></script>
<script src="js/main.js"></script>
</body>
</html>
