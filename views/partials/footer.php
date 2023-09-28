<?php
/**
 * Footer html
 *
 * @package incognito writers
 *
 */
?>

<!-- footer -->
<footer id="footer" class="footer">
    <div class="footer-grid">
        <div class="footer-abt">
            <h3>Contact Us</h3>

            <div class="footer-logo">
                <img style="width: 4rem;" src="<?php echo assetPath('images/logo.svg'); ?>" alt="Site Logo">
                <p><?= $config['siteTagline'] ?></p>
            </div>

            <p><strong>Email: </strong><?=$config['siteEmail'] ?></p>
            <p><strong>Call: </strong><?= isset($config['sitePhone']) ? $config['sitePhone'] : '' ?></p>

            <button class="btn primary-btn"><a href="<?php echo $config['orderLink'] ?>">Place an order</a></button>
        </div>

        <div class="footer-explore">
            <h3 class="footer-title">Explore</h3>
            <p><a href="/">Home</a></p>
            <p><a href="/about-us">About Us</a></p>
            <p><a href="/faq">FAQ</a></p>
            <p><a href="/services">Our Services</a></p>
        </div>

        <div class="footer-resource">
            <h3 class="footer-title">Resources</h3>
            <p><a href="/samples">Samples</a></p>
            <p><a href="/notes">Notes</a></p>
            <p><a href="/">Plagiarism-Checker</a></p>
            <p><a href="/latest/blog">Blog</a></p>
        </div>
    </div>

    <div class="footer-credits">
        <p style="text-align: center;">Copyright &copy; <?= date('Y'); ?>. <?= $config['siteTitle'] ?></p>
    </div>
</footer>

</div>
<script src="<?php echo assetPath('js/script.js'); ?>?<?php echo date('Y-m-d_H-m-s'); ?>"></script>
</body>
</html>
