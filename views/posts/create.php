<?php

view('partials/header.php');
?>
<section class="section">
    <form method="POST" action="/questions/new" class="question-form">
        <h2 class="section-title">Create a Question</h2>

        <div class="form-element">
            <label for="title" class="form-label">Title</label>
            <input id="title" required name="title" class="text-input" placeholder="Enter Question Title" value="<?= $_POST['title'] ?? '' ?>">
            <p class="form-error"><?= $errors['title'] ?? '' ?></p>
        </div>

        <div class="form-element">
            <label for="excerpt" class="form-label">Excerpt</label>
            <textarea id="excerpt" required name="excerpt" class="form-textarea" rows="3" placeholder="Enter Question Excerpt" ><?= $_POST['excerpt'] ?? '' ?></textarea>
            <p class="form-error"><?= $errors['excerpt'] ?? '' ?></p>
        </div>

        <div class="form-element">
            <label for="category" class="form-label">Category</label>
            <input id="category" required name="category" class="text-input" placeholder="Enter category e.g. 'History'" value="<?= $_POST['category'] ?? '' ?>">
        </div>

        <div class="form-element">
            <label for="tag" class="form-label">Tag</label>
            <input id="tag" required name="tag" class="text-input" placeholder="Enter tag e.g. 'history paper, urgent, term paper, etc'" value="<?= $_POST['tag'] ?? '' ?>">
        </div>
        <div class="form-element">
            <label for="body" class="form-label">Body</label>
            <textarea required id="body" name="body" class="form-textarea" rows="5" placeholder="Enter Question Description/Instructions"><?php echo !empty($errors) ? $_POST['body'] : '' ?></textarea>
            <p class="form-error"><?= $errors['body'] ?? '' ?></p>
        </div>

        <div class="form-element">
            <button type="submit" class="btn secondary-btn">Submit</button>
        </div>
    </form>
</section>
<?php
view('partials/footer.php');
?>
