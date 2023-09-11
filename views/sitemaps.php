<?php

view('partials/header.php');

?>

<section class="section">
    <h1 class="section-title">Sitemaps</h1>
    <div class="body-content">
        <?php
        if (empty($sitemaps)) {
            echo "No Sitemaps found!";
        } else {
            foreach ($sitemaps as $sitemap) {
                ?>
                <p><a href="<?php echo '/sitemaps/'.$sitemap['loc']; ?>">
                    <?php echo $sitemap["loc"]; ?>
                </a></p>
                <?php
            }
        }
        ?>
    </div>
</section>

<?php
view('partials/footer.php');
