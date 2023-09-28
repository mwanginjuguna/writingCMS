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
                echo htmlentities($post['title']);
                ?>
            </h1>
            <p class="question-excerpt">
                <?php
                echo htmlentities($post['excerpt']);
                ?>
            </p>
            <div class="question-meta">
                <p class="question-category">
                    <span style="font-weight: bold;">Category: </span>
                    <?php
                    echo htmlentities($post['category']);
                    ?>
                </p>

                <p class="question-tags"><span style="font-weight: bold;">Tags: </span>
                    <?php
                    echo htmlentities($post['tag']);
                    ?>
                </p>
            </div>
        </div>

        <div class="question-body" style="white-space: pre-line">
            <svg height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#FFFFFF;" d="M372.809,508H94.315c-15.735-0.04-28.477-12.783-28.517-28.517V32.517 C65.838,16.782,78.581,4.04,94.315,4h323.378c15.735,0.04,28.477,12.783,28.517,28.517v402.306"></path> <path style="fill:#8E8E8E;" d="M372.817,512H94.315c-17.95-0.024-32.501-14.575-32.517-32.525V32.517 C61.814,14.567,76.365,0.024,94.315,0h323.378c17.95,0.024,32.485,14.567,32.509,32.517v402.298h-7.999V32.517 C442.179,18.99,431.22,8.023,417.685,7.999H94.315C80.78,8.015,69.813,18.982,69.797,32.517v446.958 c0.016,13.535,10.983,24.502,24.518,24.518h278.51V512H372.817z"></path> <path style="fill:#333333;" d="M372.809,450.246v61.706l77.129-77.129h-61.682C379.744,434.839,372.841,441.727,372.809,450.246z"></path> <g> <path style="fill:#E21B1B;" d="M188.762,308.603l-19.198,63.138h-41.948l71.393-222.787H250.9l72.393,222.787H279.65 l-20.182-63.138H188.762z M252.556,277.862l-17.518-54.867c-4.296-13.543-7.935-28.757-11.199-41.644h-0.664 c-3.304,12.887-6.615,28.429-10.575,41.644l-17.19,54.867H252.556z"></path> <path style="fill:#E21B1B;" d="M350.659,147.53v40.388h38.78v13.935h-38.78v40.748h-14.663v-40.748h-38.772v-13.935h38.78V147.53 H350.659z"></path> </g> </g></svg>

            <h4>Question Details:</h4>

            <?php
            echo htmlentities($post['body']);
            ?>
<br>
            <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <polygon style="fill:#E21B1B;" points="195,419.392 218.656,349.08 159.52,305.48 232.968,301.744 255.376,235.144 279.424,304.6 352.48,306.104 293.816,353.696 317,420.016 256.264,381.184 "></polygon> <polygon style="fill:#E21B1B;" points="35.48,276.232 59.136,205.92 0,162.32 73.448,158.592 95.856,91.984 119.904,161.448 192.96,162.944 134.296,210.536 157.48,276.856 96.744,238.024 "></polygon> <polygon style="fill:#E21B1B;" points="354.52,276.232 378.176,205.92 319.04,162.32 392.488,158.592 414.896,91.984 438.944,161.448 512,162.944 453.336,210.536 476.52,276.856 415.776,238.024 "></polygon> </g> </g></svg>
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
view('partials/cta-section.php');
?>
<?php
view('partials/footer.php');
?>


