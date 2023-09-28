<?php
view('partials/header.php');
?>

<div class="page">
    <div class="page-hero">
        <div class="page-hero-left">
            <h1 class="page-title">About us - Your trusted partner in academic success.</h1>
            <p class="page-excerpt">We are a team of professional writers, researchers, and certified educators from USA, Canada, UK, and Australia. Our goal is to help you simplify your writing and learning process. We understand the challenges that students face in their academic journey, and our mission is to provide them with reliable, top-quality writing services to help them succeed.</p>
            <div style="padding-top: 1em">
                <a class="btn primary-btn" href="<?php echo $config['orderLink'] ?>">Get Started</a>
            </div>
        </div>

        <div class="page-hero-right feature-img">
            <img alt="Logo" src="<?php echo assetPath('images/logo.png'); ?>">
        </div>
    </div>

    <!-- stats -->
    <?php view('partials/stats.php'); ?>

    <section class="pop-services">
        <div>
            <h2 class="section-title">What We Do</h2>
        </div>

        <?php $bgClass = "bg-light"; view('partials/core-services.php'); ?>
    </section>

    <!--features-->
    <section class="section">
        <h2 class="section-title">Why Choose Us</h2>
        <div class="benefit-block">
            <div class="feature">
                <svg class="feature-icon" width="45px" height="45px" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>clock</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-901.000000, -253.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="clock" transform="translate(858.000000, 78.000000)"> <g transform="translate(6.000000, 6.000000)"> <circle id="Oval" fill="#FF410D" fill-rule="nonzero" cx="18" cy="18" r="18"> </circle> <circle id="Oval" fill="#0C0058" fill-rule="nonzero" cx="18" cy="18" r="14"> </circle> <polygon id="Shape" fill="#FF410D" fill-rule="nonzero" points="15 10 15 21 24 21 24 18 18 18 18 10"> </polygon> </g> </g> </g> </g> </g> </g>
                </svg>
                <p style="font-size: medium; color: #334155"><span style="color: #FF410D; font-size: large">Timely Delivery:</span> We understand the importance of meeting deadlines. Our efficient processes and dedicated team work together to ensure that your papers are delivered promptly, allowing you to submit your assignments on time.</p>
            </div>

            <div class="feature">
                <svg class="feature-icon" width="45px" height="45px" viewBox="-2.5 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>shield</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-281.000000, -566.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="shield" transform="translate(234.000000, 390.000000)"> <g transform="translate(9.000000, 7.000000)" id="Shape"> <path d="M15.516,34 C-0.414,27.828 1.032,6.8 1.032,6.8 C10.675,8.578 15.516,0 15.516,0 C15.516,0 20.346,8.578 29.968,6.8 C29.968,6.8 31.411,27.828 15.516,34 Z" fill="#FF410D"> </path> <polygon fill="#0C0058" points="8 18 13 23 23 13 21 11 13 19 10 16"> </polygon> </g> </g> </g> </g> </g> </g>
                </svg>

                <p style="font-size: medium; color: #334155"><span style="color: #FF410D; font-size: large">Anonymity and Confidentiality:</span> We take your privacy seriously. When you seek our assistance, you can trust that your identity remains completely confidential throughout the entire process. Our platform is designed to protect your personal information and ensure a secure and anonymous experience.</p>
            </div>

            <div class="feature">
                <svg class="feature-icon" width="45px" height="45px" viewBox="0 -5 44 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>graduation-cap</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-273.000000, -176.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="graduation-cap" transform="translate(234.000000, 0.000000)"> <g transform="translate(2.000000, 7.000000)" id="Shape"> <path d="M22,34 L9,26 L9,15 L35,15 L35,26 L22,34 Z M4,27 C2.54056274,27.0027654 1.29191905,25.9525119 1.04461268,24.514178 C0.797306304,23.0758441 1.62345252,21.6688523 3,21.184 L3,13 L5,14 L5,21.184 C6.37654748,21.6688523 7.2026937,23.0758441 6.95538732,24.514178 C6.70808095,25.9525119 5.45943726,27.0027654 4,27 Z" fill="#0C0058"> </path> <polygon fill="#FF410D" points="22 0.012 43.986 12.512 22 25.013 0.014 12.513"> </polygon> </g> </g> </g> </g> </g> </g>
                </svg>

                <p style="font-size: medium; color: #334155">
                    <span style="color: #FF410D; font-size: large">Expert Team of Writers:</span>  Our team consists of highly qualified writers with advanced degrees from reputable universities across the globe. Their expertise spans various subjects and academic levels, ensuring that each assignment is handled by a knowledgeable specialist.
                </p>
            </div>

            <div class="feature">
                <svg class="feature-icon" width="45px" height="45px" viewBox="0 -0.5 33 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>star</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-903.000000, -411.000000)" fill="#FF410D"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="star" transform="translate(858.000000, 234.000000)"> <g transform="translate(7.000000, 8.000000)" id="Shape"> <polygon points="27.865 31.83 17.615 26.209 7.462 32.009 9.553 20.362 0.99 12.335 12.532 10.758 17.394 0 22.436 10.672 34 12.047 25.574 20.22"> </polygon> </g> </g> </g> </g> </g> </g>
                </svg>

                <p style="font-size: medium; color: #334155"><span style="color: #FF410D; font-size: large">Unmatched Quality and Originality:</span> We are committed to delivering only the highest quality content. Every paper we produce undergoes thorough research, meticulous writing, and plagiarism checks, guaranteeing originality and excellence.</p>
            </div>

            <div class="feature">
                <svg class="feature-icon" width="45px" height="45px" viewBox="-3 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>refresh</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-358.000000, -487.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="refresh" transform="translate(312.000000, 312.000000)"> <g transform="translate(8.000000, 6.000000)" id="Shape"> <path d="M7.518,17.936 C7.49293256,20.210537 8.37251881,22.4018586 9.96323166,24.027829 C11.5539445,25.6537993 13.72546,26.5812058 16,26.606 L16,28.94 L15.056,33.226 C7.07302886,32.6307029 0.92301238,25.9407661 1,17.936 C0.866169026,10.7120146 5.91682031,4.42563728 13,3 L15,3 L15.048,9.323 C10.7154281,9.86608306 7.47749475,13.5697112 7.518,17.936 Z" fill="#0C0058"> </path> <path d="M16,33.275 C15.681,33.275 15.37,33.246 15.056,33.226 L16,28.94 L16,26.606 C20.7157508,26.5047031 24.4857636,22.6528386 24.4857636,17.936 C24.4857636,13.2191614 20.7157508,9.36729694 16,9.266 C15.6828215,9.26728475 15.3659742,9.28664949 15.051,9.324 L15,7 C15,7 14.342,2.6 16,2.6 C24.3763343,2.69447062 31.0910815,9.55962816 31,17.936 C31.0927508,26.3135379 24.3775187,33.1805342 16,33.275 Z" fill="#FF410D"> </path> <polygon fill="#FF410D" points="18.005 36 18.005 22 11 29"> </polygon> <polygon fill="#0C0058" points="13.989 0 13.989 13 20.013 6.506"> </polygon> </g> </g> </g> </g> </g> </g>
                </svg>

                <p style="font-size: medium; color: #334155"><span style="color: #FF410D; font-size: large">24/7 Support:</span> Our customer support team is always available to assist you. Whether you have questions about our services, need help with an order, or want to track the progress of your paper, we're here to provide prompt and friendly support.</p>
            </div>
        </div>
    </section>

    <section>
        <?php
        view('partials/core-services.php', ['bgClass' => 'bg-secondary']);
        ?>
    </section>

    <section class="get-started" style="background-color: #FFFFFF;">
        <div>
            <h2>Our Commitment to you</h2>
            <p>With our expert service, your academic success is the top priority to our writers. We are dedicated to providing you with the tools and support you need to excel in your studies. Our commitment to excellence, privacy, and customer satisfaction drives everything we do.</p>
            <h3>Join Thousands of Satisfied Students</h3>
            <p>
                Over the years, we have had the privilege of helping thousands of students worldwide achieve their academic aspirations. Our satisfied customers attest to the quality of our services, our professionalism, and our unwavering commitment to their success.
            </p>
        </div>
    </section>

    <?php
    view('partials/cta-section.php');
    ?>
</div>

<?php
view('partials/footer.php');
?>
