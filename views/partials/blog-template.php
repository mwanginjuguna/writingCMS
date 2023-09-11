<?php

?>
<!-- blog -->
<div class="blog-grid">
    <?php
    foreach ($questions as $question) :
    ?>
    <div class="blog-entry">
        <h3 class="blog-entry-title">
            <a href="/posts/<?= $question['slug'] ?>">
            <?php
            echo $question ? $question['title'] : "Custom Essay Paper";
            ?>
            </a>
        </h3>

        <p class="blog-entry-excerpt">
            <?php
            echo $question ? $question['excerpt'] : "Your first step in developing Project Part One for the course is to identify the two artifacts you want to compare and the theme that is common to both artifacts.";
            ?>
        </p>
        <p>
            <span  class="post-category">
                <a href="/categories/<?php echo $question['category_name'] ?? $question['category']; ?>">
                    <?= $question['category_name'] ?? $question['category'] ?>
                </a>
            </span> |
            <span class="post-tags">
                <a href="/tags/<?php echo $question['tag_name'] ?? $question['tag']; ?>">
                    <?= $question['tag_name'] ?? $question['tag'] ?>
                </a>
            </span>
        </p>
    </div>
    <?php
    endforeach;
    ?>
</div>
