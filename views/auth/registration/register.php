<?php

view('partials/header.php');
?>

<section class="section">
    <div class="question-form">
        <h1 class="section-title">Register an account</h1>

        <form action="/register" method="post" enctype="multipart/form-data">
            <div class="form-element">
                <label class="form-label" for="email">Email</label>
                <input id="email" name="email" type="email"
                       class="text-input"
                       placeholder="Enter an email address."
                       value="<?php echo $old['email'] ?? false; ?>"
                >
                <p class="form-error">
                    <?php
                    if (!empty($errors)) {
                        echo $errors['email'] ?? '';
                    }
                    ?>
                </p>
            </div>

            <div class="form-element">
                <label class="form-label" for="password">Password</label>
                <input id="password" name="password" type="password" class="text-input" placeholder="Enter your password.">
                <p class="form-error">
                    <?php
                    if (!empty($errors)) {
                        echo $errors['password'] ?? '';
                    }
                    ?>
                </p>
            </div>

            <div class="form-element">
                <button type="submit" class="btn secondary-btn">Register</button>
                <span style="padding-left: 2em;font-size: small">Already registered? <a href="/login">Login here</a></span>
            </div>
        </form>
    </div>
</section>


<?php

view('partials/footer.php');
?>


