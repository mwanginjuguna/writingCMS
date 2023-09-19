<?php
/**
 * question view page
 *
 */

view('partials/header.php', [

]);
?>

<!-- content -->
<div class="grid-container">
    <div class="body-content">
        <div class="question-details">
            <h1 class="question-title">
                <?php
                echo $post['title'];
                ?>
            </h1>
            <p class="question-excerpt">
                <?php
                echo $post['excerpt'];
                ?>
            </p>
            <div class="question-meta">
                <p class="question-category">
                    <span style="font-weight: bold;">Category: </span>
                    <?php
                    echo $post['category_name'] ?? $post['category'];
                    ?>
                </p>

                <p class="question-tags"><span style="font-weight: bold;">Tags: </span>
                    <?php
                    echo $post['tag_name'] ?? $post['tag'];
                    ?>
                </p>
            </div>
        </div>

        <div class="question-body" style="white-space: pre-line">
            <svg width="64px" height="64px" viewBox="-5 0 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>badge</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-749.000000, -564.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="badge" transform="translate(702.000000, 390.000000)"> <g transform="translate(10.000000, 5.000000)"> <polygon id="Shape" fill="#FF410D" points="7.012 24 7.012 38 14 31 20.988 38 20.988 24"> </polygon> <circle id="Oval" fill="#0C0058" fill-rule="nonzero" cx="14" cy="14" r="14"> </circle> <circle id="Oval" fill="#FF410D" cx="14" cy="14" r="6"> </circle> </g> </g> </g> </g> </g> </g>
            </svg>

            <h4>Question Details:</h4>

            <?php
            echo $post['body'];
            ?>

            <svg width="64px" height="64px" viewBox="-4 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>doc</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-750.000000, -644.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="doc" transform="translate(702.000000, 468.000000)"> <g transform="translate(11.000000, 7.000000)"> <rect id="Rectangle-path" fill="#FF6E6E" fill-rule="nonzero" x="0" y="0" width="26" height="34"> </rect> <path d="M5,0 L5,11 L8,8 L11,11 L11,0 L5,0 Z M17,12 L26,12 L26,14 L17,14 L17,12 Z M17,18 L26,18 L26,20 L17,20 L17,18 Z M17,23 L26,23 L26,25 L17,25 L17,23 Z" id="Shape" fill="#0C0058"> </path> <path d="M13.995,12.005 L13.995,13.987 L17.005,13.987 L17.005,12.005 L13.995,12.005 Z M13.995,18.015 L13.995,20 L17.005,20 L17.005,18.016 L13.995,18.016 L13.995,18.015 Z M13.995,22.993 L13.995,25.007 L17.005,25.007 L17.005,22.993 L13.995,22.993 Z" id="Shape" fill="#FFFFFF"> </path> </g> </g> </g> </g> </g> </g>
            </svg>
            <p><a href="<?= $orderLink ?>">Order an Original Solution</a></p>
        </div>
    </div>

    <!-- sidebar -->
    <div class="sidebar">
        <?php view('partials/order-form-calculator.php'); ?>

        <div class="container">
            <h3>Professional Writing service</h3>

            <div>
                <p><em>Join the many successful students who have trusted our academic writing expertise. Our academic writing services ensure you never miss a deadline and ace every assignment. Don't wait – let's write your success story together!</em></p>
                <h2>What you get from out service:</h2>

                <div class="service-svg">
                    <svg width="34px" height="34px" viewBox="-3 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>refresh</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-358.000000, -487.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="refresh" transform="translate(312.000000, 312.000000)"> <g transform="translate(8.000000, 6.000000)" id="Shape"> <path d="M7.518,17.936 C7.49293256,20.210537 8.37251881,22.4018586 9.96323166,24.027829 C11.5539445,25.6537993 13.72546,26.5812058 16,26.606 L16,28.94 L15.056,33.226 C7.07302886,32.6307029 0.92301238,25.9407661 1,17.936 C0.866169026,10.7120146 5.91682031,4.42563728 13,3 L15,3 L15.048,9.323 C10.7154281,9.86608306 7.47749475,13.5697112 7.518,17.936 Z" fill="#0C0058"> </path> <path d="M16,33.275 C15.681,33.275 15.37,33.246 15.056,33.226 L16,28.94 L16,26.606 C20.7157508,26.5047031 24.4857636,22.6528386 24.4857636,17.936 C24.4857636,13.2191614 20.7157508,9.36729694 16,9.266 C15.6828215,9.26728475 15.3659742,9.28664949 15.051,9.324 L15,7 C15,7 14.342,2.6 16,2.6 C24.3763343,2.69447062 31.0910815,9.55962816 31,17.936 C31.0927508,26.3135379 24.3775187,33.1805342 16,33.275 Z" fill="#FF410D"> </path> <polygon fill="#FF410D" points="18.005 36 18.005 22 11 29"> </polygon> <polygon fill="#0C0058" points="13.989 0 13.989 13 20.013 6.506"> </polygon> </g> </g> </g> </g> </g> </g>
                    </svg>
                    <h3 class="" style="color: #6119FF">24|7 Availability</h3>
                </div>

                <div class="service-svg">
                    <svg width="34px" height="34px" viewBox="0 -1.5 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>layers</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-824.000000, -334.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="layers" transform="translate(780.000000, 156.000000)"> <g transform="translate(6.000000, 9.000000)" id="Shape"> <polygon fill="#FF410D" points="18 11.6 35.013 21.3 18 30.99 0.987 21.29"> </polygon> <polygon fill="#0C0058" points="18 5.8 35.013 15.5 18 25.2 0.987 15.5"> </polygon> <polygon fill="#FF410D" points="18 0.01 35.013 9.71 18 19.4 0.987 9.7"> </polygon> </g> </g> </g> </g> </g> </g>
                    </svg>
                    <h3 class="" style="color: #6119FF">Experts in Every Subject-area/Discipline</h3>
                </div>

                <div class="service-svg">
                    <svg width="34px" height="34px" viewBox="0 -9.5 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>infinity</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-744.000000, -262.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="infinity" transform="translate(702.000000, 78.000000)"> <g transform="translate(5.000000, 15.000000)" id="Shape"> <path d="M28.952,19 C26.1276534,19.0032293 23.4641032,17.6862517 21.752,15.44 L16.288,10 L21.757,4.56 C24.3055147,1.16357777 28.8771268,0.00338606597 32.7368197,1.77352223 C36.5965125,3.54365839 38.6999612,7.7651731 37.7887545,11.9124992 C36.8775478,16.0598252 33.1982329,19.0108122 28.952,19 Z M28.852,4.6 C27.1341069,4.59401992 25.5099216,5.38248806 24.452,6.736 L21.112,10 L24.454,13.264 C25.5118239,14.6176328 27.1360723,15.4061316 28.854,15.4 C30.7832342,15.3996428 32.5657296,14.3700785 33.5300373,12.699134 C34.494345,11.0281895 34.4939638,8.96972114 33.5290373,7.29913394 C32.5641108,5.62854674 30.7812342,4.59964269 28.852,4.6 Z" fill="#6119FF"> </path> <path d="M16.243,15.44 C13.907031,18.5187667 9.86628593,19.7625063 6.20336868,18.5301943 C2.54045143,17.2978824 0.0731743396,13.8646547 0.0731743396,10 C0.0731743396,6.13534534 2.54045143,2.70211764 6.20336868,1.46980566 C9.86628593,0.237493682 13.907031,1.48123332 16.243,4.56 L21.712,10 L16.243,15.44 Z M13.543,6.74 C12.4850784,5.38648806 10.8608931,4.59801992 9.143,4.604 C6.16066235,4.604 3.743,7.02166235 3.743,10.004 C3.743,12.9863376 6.16066235,15.404 9.143,15.404 C10.8609277,15.4101316 12.4851761,14.6216328 13.543,13.268 L16.888,10 L13.543,6.74 Z" fill="#FF410D"> </path> </g> </g> </g> </g> </g> </g>
                    </svg>
                    <h3 class="" style="color: #6119FF">Unlimited Free edits and revisions.</h3>
                </div>

                <div class="service-svg">
                    <svg width="34px" height="34px" viewBox="-2.5 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>shield</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-281.000000, -566.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="shield" transform="translate(234.000000, 390.000000)"> <g transform="translate(9.000000, 7.000000)" id="Shape"> <path d="M15.516,34 C-0.414,27.828 1.032,6.8 1.032,6.8 C10.675,8.578 15.516,0 15.516,0 C15.516,0 20.346,8.578 29.968,6.8 C29.968,6.8 31.411,27.828 15.516,34 Z" fill="#6119FF"> </path> <polygon fill="#FF410D" points="8 18 13 23 23 13 21 11 13 19 10 16"> </polygon> </g> </g> </g> </g> </g> </g>
                    </svg>
                    <h3 class="" style="color: #6119FF">Tested. Trusted. Secure Service.</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section">
    <h2 class="section-title">Related Questions <span style="font-size: medium; color: orangered">~ Solved recently</span></h2 class="section-title">
    <?php
    view( 'partials/blog-template.php', ["questions" => $relatedPosts]);
    ?>
</section>
<?php
view('partials/footer.php');
?>


