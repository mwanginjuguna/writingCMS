<?php
/**
 * Order calculator
 *
 * @package incognito
 */

use Core\App;
use Core\Assets;

$assets = App::resolve(Assets::class);

?>
<div class="order-form-container">
    <form class="order-form">
        <h3 style="padding-bottom: 4px">Price Calculator</h3>
        <div>
            <select id="service_type" name="service_type" class="form-select" onchange="setInits()">
                <option selected value="2">Coursework</option>
                <?php
                foreach ($assets->services as $service) {
                    echo '<option value="'.$service["id"].'">'.$service["name"].'</option>';
                }
                ?>
            </select>
        </div>

        <div>
            <select id="level" name="level" class="form-select" onchange="setInits()">
                <option value="2">College</option>
                <?php
                foreach ($assets->levels as $level) {
                    echo '<option value="'.$level["id"].'">'.$level["name"].'</option>';
                }
                ?>
            </select>
        </div>

        <div>
            <select id="deadline" name="deadline" class="form-select" onchange="setInits()">
                <option value="336">14 Days</option>
                <?php
                foreach ($assets->rates as $rate) {
                    echo '<option value="'.$rate["hours"].'">'.$rate["name"].'</option>';
                }
                ?>
            </select>
        </div>

        <div>
            <select id="pages" name="pages" class="form-select" onchange="setInits()">
                <option value="1">1 page / 275 words</option>
                <?php
                foreach (range(1,50) as $page) {
                    echo '<option value="'.$page.'">'.$page.' page(s)/'.$page*275 .' Words' .'</option>';
                }
                ?>
            </select>
        </div>

        <div>
            <p>Price: $<span id="amount">45</span></p>
        </div>

        <button class="btn primary-btn"><a href="<?php echo $config['orderLink'] ?>">Order Now</a></button>
    </form>
</div>
