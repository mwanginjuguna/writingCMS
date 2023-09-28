<?php

view('partials/header.php');
?>
<div class="page">
    <div class="page-hero">
        <div class="page-hero-left">
            <h1>Blog - Top Writers for Quality assistance with assignments</h1>
            <p class="page-excerpt">Access top-quality solutions for your assignments and count on us to meet your deadlines, even on short notice.</p>
            <a class="btn secondary-btn" href="<?php echo $config['orderLink'] ?>">Order Now</a>
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
