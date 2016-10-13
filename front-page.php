<?php
/* Front Page Template */
    get_header();
?>
<div class="home">
        <div class="home-hero-section">
            <div class="hero-content">
                <h1>Never Fail Again</h1>
                <p>We are a team of friendly and experienced personal trainers with a proven track record of successful client transformations</p>
            </div>
        </div>
        <div class="home-philosophy-section">
            <div class="home-philosophy-content">
                <h2>Our Philosophy</h2>
                <p>Here at TrainU, we understand that life is often hectic. We specialise in fitting in with your daily routine.</p>
                <p>Whether it's at your local gym, park, or even your living room, our enthusiastic personal trainers will keep you motivated and active with one-to-one sessions.</p>
            </div>
        </div>
        <div class="home-location-section">
            <div class="home-location-content">
                <h2>Location</h2>
                <p>With a large team of trainers located across the region, If you live in Greater Manchester, we can accomodate you. It's as simple as that.</p>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="home-testimonial-section">
            <h2>What Our Clients Think</h2>
            <div class="testimonial-width-wrapper">
                <div class="testimonial testimonial-pink">
                    <img src="<?php bloginfo('template_url') ?>/images/peter-featured-headshot.png" alt="">
                    <h3>Peter Peterson</h3>
                    <p>"I couldn't recommend TrainU enough. I've never felt better!"
                    </p>
                </div>
                <div class="testimonial testimonial-teal">
                    <img src="<?php bloginfo('template_url') ?>/images/leslie-featured-headshot.png" alt="">
                    <h3>Leslie Dean</h3>
                    <p>"I couldn't recommend TrainU enough. I've never felt better!"
                    </p>
                </div>
                <div class="testimonial testimonial-purple">
                    <img src="<?php bloginfo('template_url') ?>/images/lauren-featured-headshot.png" alt="">
                    <h3>Lauren Smith</h3>
                    <p>"I couldn't recommend TrainU enough. I've never felt better!"
                    </p>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>