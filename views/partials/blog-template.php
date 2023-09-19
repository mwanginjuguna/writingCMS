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
            echo $question ? $question['excerpt'] : "Time is precious, and so are your grades. Let us handle your academic writing tasks while you focus on what truly matters. Say goodbye to stress and hello to top-notch papers!";
            ?>
        </p>
        <p>
            <span  class="post-category">
                <a href="/categories/<?php echo $question['category']; ?>">
                    <?= $question['category'] ?>
                </a>
            </span> |
            <span class="post-tags">
                <a href="/tags/<?php echo $question['tag']; ?>">
                    <?= $question['tag'] ?>
                </a>
            </span>
        </p>
    </div>
    <?php
    endforeach;
    ?>
</div>
