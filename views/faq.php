<?php
/**
 * Landing page for incognitowriters.com
 */

view('partials/header.php');
?>

<div class="page">
    <div class="page-hero">
        <div>
            <h1 class="page-title">Frequently Asked Questions (FAQ) - Your Queries, Our Solutions</h1>
            <p class="page-excerpt">Answering your frequently asked questions.</p>
            <a class="btn primary-btn" href="/orders/new">Write my Paper</a>
        </div>

        <img alt="" class="feature-img" src="<?php echo assetPath('images/how-to-order-incognito-writers.png'); ?>">
    </div>

    <section class="section faq">
        <h2 class="section-title">These are some common questions from our customers</h2>

        <div class="faq-entry">
            <h4>What if my deadline is tight? Can you still deliver on time?</h4>
            <p>
                Absolutely! We specialize in meeting tight deadlines. Our efficient processes and dedicated team allow us to deliver papers promptly, even within a few hours, ensuring you never miss a submission date.</p>
        </div>

        <div class="faq-entry">
            <h4>Is my personal information safe and confidential?</h4>
            <p>Absolutely! At Incognito Writer, we prioritize your privacy. Your personal information is handled with the utmost care and kept strictly confidential. We have robust security measures in place to protect your data.</p>
        </div>

        <div class="faq-entry">
            <h4>How do I know that the content will be original and plagiarism-free?</h4>
            <p>
                We take plagiarism very seriously. Our expert writers conduct thorough research and cite all sources properly. Additionally, we use plagiarism detection tools to ensure that all papers are 100% original and free from plagiarism.</p>
        </div>

        <div class="faq-entry">
            <h4>Can I communicate with the writer assigned to my project?</h4>
            <p>
                Yes, definitely! We encourage direct communication between you and your assigned writer. Our messaging system allows you to discuss your requirements, provide feedback, and clarify any doubts throughout the writing process.</p>
        </div>

        <div class="faq-entry">
            <h4>What if I need revisions on my paper?</h4>
            <p>
                Your satisfaction is our priority. We offer unlimited revisions within a specified timeframe, allowing you to request adjustments or modifications to ensure your paper meets your expectations.</p>
        </div>

        <div class="faq-entry">
            <h4>How do I place an order for my writing task?</h4>
            <p>
                Placing an order is simple and hassle-free. Just head to our website, fill out the user-friendly order form, provide all necessary details, make a secure payment, and let our expert writers take it from there.</p>
        </div>

        <div class="faq-entry">
            <h4>Can I request a specific writer for my project?</h4>
            <p>
                Yes, you can! We offer the option to request a preferred writer if you've worked with someone you particularly liked before. Just let us know, and we will do our best to accommodate your request.</p>
        </div>

        <div class="faq-entry">
            <h4>What qualifications do your writers possess?</h4>
            <p>
                Our writing team consists of highly qualified experts with advanced degrees from prestigious universities worldwide. They are adept at handling various subjects and academic levels, ensuring top-quality papers.</p>
        </div>

        <div class="faq-entry">
            <h4>What if I'm not satisfied with the final paper?</h4>
            <p>
                Your satisfaction is our priority, and we aim to deliver outstanding work. In the rare event that you're not completely satisfied, contact our customer support team, and we'll work closely with you to address your concerns.</p>
        </div>

        <div class="faq-entry">
            <h4>How do I make a payment for my order? Is it secure?</h4>
            <p>
                We offer secure payment options to ensure the safety of your transactions. You can use various payment methods, including credit cards and other secure online payment systems, with the assurance that your financial information is protected.</p>
        </div>
    </section>

    <section class="section">
        <div class="grid-container">
            <img class="feature-img" src="<?php echo assetPath('images/quality-custom-solutions.png'); ?>" alt="quality services image">

            <div style="margin-top: 4em">
                <?php view('partials/order-form-calculator.php') ?>
            </div>
        </div>
    </section>

    <section class="get-started">
        <div>
            <h2>Your Success Starts Here</h2>
            <p>
                Whether you need assistance with research papers, essays, dissertations, presentations, or any other academic writing task, let us be your reliable partner. Trust us to deliver exceptional results and support you every step of the way</p>
            <a href="/orders/new" class="btn primary-btn">Get Started Now</a>
        </div>
    </section>
</div>

<?php
view('partials/footer.php');
?>
