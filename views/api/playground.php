<?php
view('partials/header.php');
?>

<section class="section">
    <div class="question-form">
        <h3>API Testing with JS fetch API.</h3>
        <form method="post" action="/api/json-ep" enctype="application/x-www-form-urlencoded">
            <div class="form-element">
                <input class="text-input" name="json_data" type="hidden"
                       value='[{"title": "Scientific Inquiry - Environmental Impact Study","body": "Conduct an environmental impact study on a local ecosystem that has undergone significant changes due to human activity. Describe the ecosystem, the changes that have occurred, and the potential ecological consequences.","category": "Science","tag": "Environmental Science"}]'>
                <button id="json" class="btn secondary-btn">Run JSON API</button>
            </div>
        </form>
    </div>
</section>

<?php
view('partials/footer.php');
?>
