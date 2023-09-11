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
            <label for="category_id" class="form-label">Categories</label>
            <select id="category_id" name="category_id" class="form-select form-element">
                <option selected value="1">Choose a category</option>
                <?php
                foreach ($categories as $category) :
                    ?>
                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-element">
            <label for="tag_id" class="form-label">Tags</label>
            <select id="tag_id" name="tag_id" class="form-select form-element">
                <option selected value="<?= $_POST['id'] ?? 1 ?>">Choose a tag</option>
                <?php
                foreach ($tags as $tag) :
                    ?>
                    <option value="<?= $tag['id'] ?>"><?= $tag['name'] ?></option>
                <?php endforeach; ?>
            </select>
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
