<?php
//dd('Admin setup view.');
view('partials/header.php');
?>

<section class="section">
    <div>
        <h1 class="page-title">Admin Setup</h1>
        <p class="page-excerpt">Use this page to customize the identity of the website. The following fields will be used throughout the entire pages of the website.<br>
            On submit, the application will save the details, customize the website, and initialize the sitemaps.
        </p>
    </div>

    <div class="question-form">
        <form action="/admin-setup" method="post" enctype="multipart/form-data">
            <div class="form-element">
                <label for="site-title" class="form-label">
                    Site title:
                </label><span style="color: red;font-size: small">*</span>
                <span style="font-size: x-small">What is the name of your site?</span>
                <input id="site-title" name="site-title" class="text-input" required
                       placeholder="Site title, e.g., 'Paper Writers'."
                       value="<?= empty($errors) ? $data['siteTitle'] : $_POST['site-title'] ?>"
                >
                <p class="form-error"><?= $errors['siteTitle'] ?? '' ?></p>
            </div>

            <div class="form-element">
                <label for="site-tagline" class="form-label">
                    Site tagline:
                </label><span style="color: red;font-size: small">*</span>
                <span style="font-size: x-small">Create a site tagline.</span>
                <input id="site-tagline" name="site-tagline"
                       class="text-input"
                       placeholder="Enter tagline e.g., 'The best academic experts.'"
                       value="<?= empty($errors) ? $data['siteTagline'] : $_POST['site-tagline'] ?>"
                >
                <p class="form-error"><?= $errors['siteTagline'] ?? '' ?></p>
            </div>

            <div class="form-element">
                <label for="site-excerpt" class="form-label">
                    Site excerpt:
                </label><span style="color: red;font-size: small">*</span>
                <span style="font-size: x-small">Provide a meta description of the site. Keep it under 160 characters.</span>
                <textarea id="site-excerpt" required
                          name="site-excerpt"
                          class="form-textarea"
                          rows="3"
                          placeholder="Enter Site Excerpt"
                ><?php echo empty($errors['siteExcerpt']) ? $data['siteExcerpt'] : $_POST['site-excerpt']; ?></textarea>
                <span id="textarea-counter"></span>
                <p class="form-error"><?= $errors['siteExcerpt'] ?? '' ?></p>
            </div>

            <!--<div class="form-element">
                <label for="site-logo" class="form-label">
                    Site Logo:
                </label><span style="color: red;font-size: small">*</span>
                <span style="font-size: x-small">Select an image for site logo.</span>
                <input id="site-logo" type="file" name="site-logo" class="text-input">

                <p class="form-error"></p>
            </div>-->

            <div class="form-element">
                <label for="order-link" class="form-label">
                    Order link:
                </label><span style="color: red;font-size: small">*</span>
                <span style="font-size: x-small">This is the link used to navigate to the order page.</span>
                <input id="order-link" name="order-link"
                       class="text-input"
                       placeholder="Order page url e.g., 'https://ordersystem.com/orders/new'"
                       value="<?= empty($errors) ? $data['orderLink'] : $_POST['order-link'] ?>"
                >
                <p class="form-error"><?= $errors['orderLink'] ?? '' ?></p>
            </div>

            <div class="form-element">
                <label for="login-link" class="form-label">
                    Login link:
                </label><span style="color: red;font-size: small">*</span>
                <span style="font-size: x-small">This is the link used to navigate to the login page of your order system.</span>
                <input id="login-link" name="login-link"
                       class="text-input"
                       placeholder="Login page url e.g., 'https://ordersystem.com/orders/login'"
                       value="<?= empty($errors) ? $data['loginLink'] : $_POST['login-link']  ?>"
                >
                <p class="form-error"><?= $errors['loginLink'] ?? '' ?></p>
            </div>

            <div class="form-element">
                <label for="site-email" class="form-label">
                    Site Email:
                </label><span style="color: red;font-size: small">*</span>
                <span style="font-size: x-small">This is the official and public email for the site.</span>
                <input id="site-email" name="site-email"
                       class="text-input"
                       placeholder="Site email e.g., info@writingcms.com"
                       value="<?= empty($errors) ? $data['siteEmail'] : $_POST['site-email'] ?>"
                >
                <p class="form-error"><?= $errors['siteEmail'] ?? '' ?></p>
            </div>

            <div class="form-element">
                <label for="googleVerificationCode" class="form-label">
                    Google Verification Code:
                </label><span style="color: red;font-size: small">*</span>
                <span style="font-size: x-small">Go to Google Console and verify your website. Choose HTML tag option.
                    Copy the code and paste the part with content only i.e. the part of the tag that looks something like this: content="qcwsES6RE4qlVt47Qdx2ndjgY" without the 'content=' part. Paste it here.</span>
                <input id="googleVerificationCode" name="googleVerificationCode"
                       class="text-input"
                       placeholder="Paste the content part only Google Verification Code from Google console"
                       value="<?= empty($errors) ? $data['googleVerificationCode'] : $_POST['googleVerificationCode'] ?>"
                >
                <p class="form-error"><?= $errors['googleVerificationCode'] ?? '' ?></p>
            </div>

            <button type="submit" class="btn primary-btn">Submit</button>
        </form>
    </div>
</section>

<?php
view('partials/footer.php');
