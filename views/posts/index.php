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


    <?php
    view('partials/blog-template.php', [
        "questions" => $questions,
        "pages" => $pages,
    ]);

    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

    $prevPage = max($currentPage - 1, 1);
    $nextPage = min($currentPage + 1, $pages);
    ?>

    <div class="section" style="margin-right: auto; margin-left: auto; width: 70vw">
        <a class="btn" href="/blog?page=<?php echo $prevPage; ?>" style="<?php echo $currentPage === 1 ? 'display: none' : '' ?>">Previous</a>

        <?php
        foreach (range(1, $pages) as $page) { ?>
            <a class="btn" href="/blog?page=<?= $page ?>"><?= $page ?></a>
        <?php }
        ?>

        <a class="btn" href="/blog?page=<?= $nextPage ?>">Next</a>
    </div>
</div>
<?php
view('partials/footer.php');
?>
