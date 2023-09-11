<?php

view('partials/header.php');
?>
<section class="section">
    <div class="question-form">
        <form enctype="multipart/form-data">
            <h2 class="section-title">Upload Multiple Questions</h2>

            <?php
            if (strlen($message) >= 1) { ?>
                <div class="flash-message">
                    <p><?= $message ?></p>
                </div>
            <?php }
            ?>

            <div class="form-element" style="padding: 2em 0px;">
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                <input type="file" id="csv_file" required name="csv_file" class="file-input" placeholder="Enter Question Title" >
                <?php
                if (!empty($errors)) {
                    foreach ($errors as $error) {
                        echo '<p class="form-error">'.$error.'</p>';
                    }
                }
                ?>
            </div>

            <div class="form-element">
                <button type="submit" id="upload-btn" class="btn secondary-btn">Submit</button>
            </div>
        </form>

        <?php
        if (strlen($message) >= 1) { ?>

        <form class="bullet" enctype="multipart/form-data" method="post" action="/questions/process">
            <input name="csv_file" value="<?php echo $file ?? ''; ?>" type="hidden">
            <p>File <?php echo $file ?? ''; ?> is uploaded and ready to be processed!</p>
            <button type="submit" class="btn primary-btn">Process</button>
        </form>
        <?php
            echo $errors['processing'] ? '<p class="form-error">'.$errors['processing'].'</p>' : '';
        }
        ?>
    </div>
</section>

<!-- show files -->
<section class="section">
    <?php
    if (!empty($questionFiles)) { ?>
    <table class="questions-file">
        <thead class="file-entry">
            <tr>
                <th>File Name</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($questionFiles as $qFile) {
            ?>
            <tr class="tbody-row">
                <td>
                    <?php echo basename($qFile['filename']); ?>
                </td>
                <td>
                    <?php
                    if ($qFile['processed']) {
                        echo "Processed";
                    } else { ?>
                        Not Processed
                        <form enctype="multipart/form-data" method="post" action="/questions/process">
                            <input name="csv_file" value="<?php echo $qFile['filename']; ?>" type="hidden">
                            <button type="submit" class="btn primary-btn">Process</button>
                        </form>
                    <?php
                    }
                    ?>
                </td>
            </tr>
            <?php
        }
    }
    ?>
        </tbody>

    </table>
</section>

<?php
view('partials/footer.php');
?>
