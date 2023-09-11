<?php

view('partials/header.php');
?>
<div class="page">
    <div class="page-hero">
        <div class="page-hero-left">
            <h1>Blog - Incognito Writers</h1>
            <p class="page-excerpt">News and Discussions for your writing journey.</p>
            <a class="btn secondary-btn" href="/orders/new">Order Now</a>
            <!-- stats -->
            <?php view('partials/stats.php'); ?>
        </div>

        <div class="page-hero-right">
            <div class="hero-form">
                <?php view('partials/order-form-calculator.php'); ?>
            </div>
        </div>
    </div>


    <?php view('partials/blog-template.php'); ?>

</div>
<?php
view('partials/footer.php');
?>
