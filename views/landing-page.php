<?php
/**
 * Landing page for incognitowriters.com
 */

view('partials/header.php', ['config' => $config]);
?>

<div class="page">
    <div class="hero">
        <div class="hero-left">
            <h1 class="landing-title">Transform Your Grades with Professional Writing Support</h1>
            <h3>Receive personalized, meticulously researched papers that propel you towards outstanding academic achievements.</h3>
            <p>We help you excel in your studies with our reliable and high-quality writing services crafted by top-tier writers who deliver exceptional papers.</p>
        </div>
        <div class="hero-form">
            <?php view('partials/order-form-calculator.php') ?>
        </div>

        <!-- stats -->
        <?php view('partials/stats.php'); ?>
    </div>

    <!-- popular services -->
    <section class="pop-services">
        <h2 class="pop-services-title">Our Popular Services <span style="font-size: medium; color: orangered"> - Now at Your Fingertips</span></h2>

        <?php view('partials/popular-services.php'); ?>
    </section>

    <section class="benefits">
        <h2>Build the confidence to excel in your studies <span style="font-size: medium; color: orangered"> - with our reliable and high-quality writing services.</span></h2>

        <div class="benefit-list">
            <div class="benefit-block">
                <img src="<?php echo assetPath('images/excelling-in-academics.png'); ?>" alt="" class="benefit-img">

                <div class="b-desc">
                    <h3>Gain an Academic Edge with Professionally Crafted Papers by Top Writers</h3>

                    <p>Experience an elevated level of academic performance with our meticulously researched and flawlessly written papers. Our team of expert writers ensures that every assignment reflects your knowledge and dedication, helping you stand out among your peers.</p>

                    <div class="bullet">
                        <svg width="20px" height="20px" viewBox="-6 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>angle-right</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-442.000000, -724.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="angle-right" transform="translate(390.000000, 546.000000)"> <g transform="translate(15.000000, 9.000000)" id="Shape"> <polygon fill="#FF410D" points="3 0 18 15 3 30 0 27 12 15 0 3"> </polygon> <path d="M5.5,8.5 L8.5,5.5 L3,0 L0,3 L5.5,8.5 Z M5.5,21.5 L0,27 L3,30 L8.5,24.5 L5.5,21.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                        </svg>
                        <p style="font-size: small; color: #334155"><span style="color: #FF410D; font-size: medium">Boost Your Grades:</span> Our top writers deliver high-quality papers that meet the highest academic standards, giving you the opportunity to achieve exceptional grades.</p>
                    </div>

                    <div class="bullet">
                        <svg width="20px" height="20px" viewBox="-6 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>angle-right</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-442.000000, -724.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="angle-right" transform="translate(390.000000, 546.000000)"> <g transform="translate(15.000000, 9.000000)" id="Shape"> <polygon fill="#FF410D" points="3 0 18 15 3 30 0 27 12 15 0 3"> </polygon> <path d="M5.5,8.5 L8.5,5.5 L3,0 L0,3 L5.5,8.5 Z M5.5,21.5 L0,27 L3,30 L8.5,24.5 L5.5,21.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                        </svg>
                        <p style="font-size: small; color: #334155"><span style="color: #FF410D; font-size: medium">Enhance Your Understanding:</span> Our expertly written papers provide valuable insights and in-depth analysis, deepening your understanding of the topic, task, or assignment.</p>
                    </div>

                    <div class="bullet">
                        <svg width="20px" height="20px" viewBox="-6 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>angle-right</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-442.000000, -724.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="angle-right" transform="translate(390.000000, 546.000000)"> <g transform="translate(15.000000, 9.000000)" id="Shape"> <polygon fill="#FF410D" points="3 0 18 15 3 30 0 27 12 15 0 3"> </polygon> <path d="M5.5,8.5 L8.5,5.5 L3,0 L0,3 L5.5,8.5 Z M5.5,21.5 L0,27 L3,30 L8.5,24.5 L5.5,21.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                        </svg>
                        <p style="font-size: small; color: #334155"><span style="color: #FF410D; font-size: medium">Save Time and Effort:</span> By entrusting your writing tasks to our professionals, you can focus on other important aspects of your academic journey while still submitting outstanding papers.</p>
                    </div>
                </div>
            </div>

            <div class="benefit-block">
                <div class="b-desc">
                    <h3>Enjoy a Hassle-Free Academic Journey with Guaranteed Confidentiality and 24/7 Support</h3>

                    <p>With Incognito Writer, your privacy is our priority. We offer a secure and anonymous platform, along with round-the-clock customer support, to ensure a seamless and stress-free academic experience.</p>

                    <div class="bullet">
                        <svg width="20px" height="20px" viewBox="-6 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>angle-right</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-442.000000, -724.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="angle-right" transform="translate(390.000000, 546.000000)"> <g transform="translate(15.000000, 9.000000)" id="Shape"> <polygon fill="#FF410D" points="3 0 18 15 3 30 0 27 12 15 0 3"> </polygon> <path d="M5.5,8.5 L8.5,5.5 L3,0 L0,3 L5.5,8.5 Z M5.5,21.5 L0,27 L3,30 L8.5,24.5 L5.5,21.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                        </svg>
                        <p style="font-size: small; color: #334155"><span style="color: #FF410D; font-size: medium">Maintain Complete Anonymity:</span> Our strict confidentiality measures and anonymous communication channels protect your identity, allowing you to seek academic assistance with peace of mind.</p>
                    </div>

                    <div class="bullet">
                        <svg width="20px" height="20px" viewBox="-6 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>angle-right</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-442.000000, -724.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="angle-right" transform="translate(390.000000, 546.000000)"> <g transform="translate(15.000000, 9.000000)" id="Shape"> <polygon fill="#FF410D" points="3 0 18 15 3 30 0 27 12 15 0 3"> </polygon> <path d="M5.5,8.5 L8.5,5.5 L3,0 L0,3 L5.5,8.5 Z M5.5,21.5 L0,27 L3,30 L8.5,24.5 L5.5,21.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                        </svg>
                        <p style="font-size: small; color: #334155"><span style="color: #FF410D; font-size: medium">Prompt and Friendly Support:</span> Our dedicated customer support team is available 24/7 to answer your questions and provide timely assistance when you need it. <strong>We are online on live chat.</strong></p>
                    </div>

                    <div class="bullet">
                        <svg width="20px" height="20px" viewBox="-6 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>angle-right</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-442.000000, -724.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="angle-right" transform="translate(390.000000, 546.000000)"> <g transform="translate(15.000000, 9.000000)" id="Shape"> <polygon fill="#FF410D" points="3 0 18 15 3 30 0 27 12 15 0 3"> </polygon> <path d="M5.5,8.5 L8.5,5.5 L3,0 L0,3 L5.5,8.5 Z M5.5,21.5 L0,27 L3,30 L8.5,24.5 L5.5,21.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                        </svg>
                        <p style="font-size: small; color: #334155"><span style="color: #FF410D; font-size: medium">Reliable and Secure Service:</span> Rest assured that your personal information and transactions are handled with the utmost care and security, providing you with a trustworthy academic writing solution.</p>
                    </div>
                </div>

                <img src="<?php echo assetPath('images/how-to-order-incognito-writers.png'); ?>" alt="" class="benefit-img">
            </div>

            <div class="benefit-block">
                <img src="<?php echo assetPath('images/quality-custom-solutions.png'); ?>" alt="" class="benefit-img">

                <div class="b-desc">
                    <h3>Get Customized Writing Solutions with Timely Delivery and Unmatched Quality</h3>

                    <p>At Incognito Writer, we pride ourselves on delivering tailor-made solutions that meet your unique requirements. With our commitment to timely delivery and unmatched quality, you can trust us to exceed your expectations.</p>

                    <div class="bullet">
                        <svg width="20px" height="20px" viewBox="-6 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>angle-right</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-442.000000, -724.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="angle-right" transform="translate(390.000000, 546.000000)"> <g transform="translate(15.000000, 9.000000)" id="Shape"> <polygon fill="#FF410D" points="3 0 18 15 3 30 0 27 12 15 0 3"> </polygon> <path d="M5.5,8.5 L8.5,5.5 L3,0 L0,3 L5.5,8.5 Z M5.5,21.5 L0,27 L3,30 L8.5,24.5 L5.5,21.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                        </svg>
                        <p style="font-size: small; color: #334155"><span style="color: #FF410D; font-size: medium">Timely Delivery:</span> We understand the importance of deadlines. Our efficient processes and dedicated team ensure that your papers are delivered on time, allowing you to meet your submission deadlines with ease. <strong>With our service, you will never be late.</strong></p>
                    </div>

                    <div class="bullet">
                        <svg width="20px" height="20px" viewBox="-6 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>angle-right</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-442.000000, -724.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="angle-right" transform="translate(390.000000, 546.000000)"> <g transform="translate(15.000000, 9.000000)" id="Shape"> <polygon fill="#FF410D" points="3 0 18 15 3 30 0 27 12 15 0 3"> </polygon> <path d="M5.5,8.5 L8.5,5.5 L3,0 L0,3 L5.5,8.5 Z M5.5,21.5 L0,27 L3,30 L8.5,24.5 L5.5,21.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                        </svg>
                        <p style="font-size: small; color: #334155"><span style="color: #FF410D; font-size: medium">Unmatched Quality:</span> Our expert writers go above and beyond to deliver exceptional papers that demonstrate in-depth research, critical thinking, and excellent writing skills.</p>
                    </div>

                    <div class="bullet">
                        <svg width="20px" height="20px" viewBox="-6 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>angle-right</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-442.000000, -724.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="angle-right" transform="translate(390.000000, 546.000000)"> <g transform="translate(15.000000, 9.000000)" id="Shape"> <polygon fill="#FF410D" points="3 0 18 15 3 30 0 27 12 15 0 3"> </polygon> <path d="M5.5,8.5 L8.5,5.5 L3,0 L0,3 L5.5,8.5 Z M5.5,21.5 L0,27 L3,30 L8.5,24.5 L5.5,21.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                        </svg>
                        <p style="font-size: small; color: #334155"><span style="color: #FF410D; font-size: medium">Customized to Your Needs:</span> We take your specific requirements into account, ensuring that every paper is customized to your preferences, academic level, and subject area.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <h2>Testimonials: What out Customers Say</h2>
        <div class="testimonial-grid">
            <div class="feedback-card">
                <svg width="24px" height="24px" viewBox="-5 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>flame</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-829.000000, -644.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="flame" transform="translate(780.000000, 468.000000)"> <g transform="translate(11.000000, 7.000000)" id="Shape"> <path d="M24.555,25.1 C23.0016934,30.9449043 17.3352812,34.7152461 11.3440153,33.8903819 C5.35274935,33.0655178 0.916028269,27.9041991 1,21.857 C0.976535234,20.8605193 1.14107319,19.868542 1.485,18.933 C2.643,11.595 9.785,11.063 5.8,7.10542736e-15 C5.8,7.10542736e-15 12.45,1.727 13.8,12.143 C13.8,12.143 18.719,11.98 15.4,4.857 C20.6710017,8.24748606 24.1823552,13.7862803 25,20 C25.0272045,21.7107711 24.8780839,23.4197933 24.555,25.1 Z" fill="#FF410D"> </path> <path d="M20,26.5 C19.9377343,30.5021395 16.7437199,33.7501147 12.743185,33.8794141 C8.74265019,34.0087135 5.34556836,30.9737661 5.025,26.984 L5,27 C5,27 4.925,23.728 5,23 C5.684,16.389 7.6,13.437 10,9 C10.067,6.361 8.885,16.273 15,19 C18.0165975,20.2750836 19.9832296,23.2250317 20,26.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                </svg>
                <div class="text-area">
                    <p><span style="color: #FF410D;font-weight: bold;">&quot;</span>This is my last class and the expert has completely transformed my grades. This is one of the best decision I made in my MBA. Thanks.<span style="color: #FF410D;font-weight: bold;">&quot;</span></p>
                    <h5>feedback from <span style="font-weight: 600;color: #334155">Nathan</span>, on Coursework help.</h5>
                </div>
            </div>

            <div class="feedback-card">
                <svg width="24px" height="24px" viewBox="-5 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>flame</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-829.000000, -644.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="flame" transform="translate(780.000000, 468.000000)"> <g transform="translate(11.000000, 7.000000)" id="Shape"> <path d="M24.555,25.1 C23.0016934,30.9449043 17.3352812,34.7152461 11.3440153,33.8903819 C5.35274935,33.0655178 0.916028269,27.9041991 1,21.857 C0.976535234,20.8605193 1.14107319,19.868542 1.485,18.933 C2.643,11.595 9.785,11.063 5.8,7.10542736e-15 C5.8,7.10542736e-15 12.45,1.727 13.8,12.143 C13.8,12.143 18.719,11.98 15.4,4.857 C20.6710017,8.24748606 24.1823552,13.7862803 25,20 C25.0272045,21.7107711 24.8780839,23.4197933 24.555,25.1 Z" fill="#FF410D"> </path> <path d="M20,26.5 C19.9377343,30.5021395 16.7437199,33.7501147 12.743185,33.8794141 C8.74265019,34.0087135 5.34556836,30.9737661 5.025,26.984 L5,27 C5,27 4.925,23.728 5,23 C5.684,16.389 7.6,13.437 10,9 C10.067,6.361 8.885,16.273 15,19 C18.0165975,20.2750836 19.9832296,23.2250317 20,26.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                </svg>
                <div class="text-area">
                    <p><span style="color: #FF410D;font-weight: bold;">&quot;</span>The expert was very fast. I thought I would miss deadline and ended up getting an A.<span style="color: #FF410D;font-weight: bold;">&quot;</span></p>
                    <h5>feedback from <span style="font-weight: 600;color: #334155">Max</span>, on Essay help.</h5>
                </div>
            </div>

            <div class="feedback-card">
                <svg width="24px" height="24px" viewBox="-5 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>flame</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-829.000000, -644.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="flame" transform="translate(780.000000, 468.000000)"> <g transform="translate(11.000000, 7.000000)" id="Shape"> <path d="M24.555,25.1 C23.0016934,30.9449043 17.3352812,34.7152461 11.3440153,33.8903819 C5.35274935,33.0655178 0.916028269,27.9041991 1,21.857 C0.976535234,20.8605193 1.14107319,19.868542 1.485,18.933 C2.643,11.595 9.785,11.063 5.8,7.10542736e-15 C5.8,7.10542736e-15 12.45,1.727 13.8,12.143 C13.8,12.143 18.719,11.98 15.4,4.857 C20.6710017,8.24748606 24.1823552,13.7862803 25,20 C25.0272045,21.7107711 24.8780839,23.4197933 24.555,25.1 Z" fill="#FF410D"> </path> <path d="M20,26.5 C19.9377343,30.5021395 16.7437199,33.7501147 12.743185,33.8794141 C8.74265019,34.0087135 5.34556836,30.9737661 5.025,26.984 L5,27 C5,27 4.925,23.728 5,23 C5.684,16.389 7.6,13.437 10,9 C10.067,6.361 8.885,16.273 15,19 C18.0165975,20.2750836 19.9832296,23.2250317 20,26.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                </svg>
                <div class="text-area">
                    <p><span style="color: #FF410D;font-weight: bold;">&quot;</span>The expert really works hard to deliver top quality submissions for my nursing class and helps me balance work with coursework.<span style="color: #FF410D;font-weight: bold;">&quot;</span></p>
                    <h5>feedback from <span style="font-weight: 600;color: #334155">Sherly</span>, on Nursing coursework.</h5>
                </div>

            </div>

            <div class="feedback-card">
                <svg width="24px" height="24px" viewBox="-5 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>flame</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-829.000000, -644.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="flame" transform="translate(780.000000, 468.000000)"> <g transform="translate(11.000000, 7.000000)" id="Shape"> <path d="M24.555,25.1 C23.0016934,30.9449043 17.3352812,34.7152461 11.3440153,33.8903819 C5.35274935,33.0655178 0.916028269,27.9041991 1,21.857 C0.976535234,20.8605193 1.14107319,19.868542 1.485,18.933 C2.643,11.595 9.785,11.063 5.8,7.10542736e-15 C5.8,7.10542736e-15 12.45,1.727 13.8,12.143 C13.8,12.143 18.719,11.98 15.4,4.857 C20.6710017,8.24748606 24.1823552,13.7862803 25,20 C25.0272045,21.7107711 24.8780839,23.4197933 24.555,25.1 Z" fill="#FF410D"> </path> <path d="M20,26.5 C19.9377343,30.5021395 16.7437199,33.7501147 12.743185,33.8794141 C8.74265019,34.0087135 5.34556836,30.9737661 5.025,26.984 L5,27 C5,27 4.925,23.728 5,23 C5.684,16.389 7.6,13.437 10,9 C10.067,6.361 8.885,16.273 15,19 C18.0165975,20.2750836 19.9832296,23.2250317 20,26.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                </svg>
                <div class="text-area">
                    <p><span style="color: #FF410D;font-weight: bold;">&quot;</span>The term paper was exactly as I needed it and the expert made adjustments when I asked for free.<span style="color: #FF410D;font-weight: bold;">&quot;</span></p>
                    <h5>feedback from <span style="font-weight: 600;color: #334155">Marr</span>, on Leadership Term paper.</h5>
                </div>
            </div>

            <div class="feedback-card">
                <svg width="24px" height="24px" viewBox="-5 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>flame</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-829.000000, -644.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="flame" transform="translate(780.000000, 468.000000)"> <g transform="translate(11.000000, 7.000000)" id="Shape"> <path d="M24.555,25.1 C23.0016934,30.9449043 17.3352812,34.7152461 11.3440153,33.8903819 C5.35274935,33.0655178 0.916028269,27.9041991 1,21.857 C0.976535234,20.8605193 1.14107319,19.868542 1.485,18.933 C2.643,11.595 9.785,11.063 5.8,7.10542736e-15 C5.8,7.10542736e-15 12.45,1.727 13.8,12.143 C13.8,12.143 18.719,11.98 15.4,4.857 C20.6710017,8.24748606 24.1823552,13.7862803 25,20 C25.0272045,21.7107711 24.8780839,23.4197933 24.555,25.1 Z" fill="#FF410D"> </path> <path d="M20,26.5 C19.9377343,30.5021395 16.7437199,33.7501147 12.743185,33.8794141 C8.74265019,34.0087135 5.34556836,30.9737661 5.025,26.984 L5,27 C5,27 4.925,23.728 5,23 C5.684,16.389 7.6,13.437 10,9 C10.067,6.361 8.885,16.273 15,19 C18.0165975,20.2750836 19.9832296,23.2250317 20,26.5 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                </svg>
                <div class="text-area">
                    <p><span style="color: #FF410D;font-weight: bold;">&quot;</span>Your expert was very friendly and completed the task earlier than the deadline. I want to work with them next term.<span style="color: #FF410D;font-weight: bold;">&quot;</span></p>
                    <h5>feedback from <span style="font-weight: 600;color: #334155">Xhin</span>, on PowerPoint presentation.</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="get-started">
        <div>
            <h2>Ready to Experience Academic Excellence?</h2>
            <p>Place your order today and unlock your academic potential with Incognito Writer. Our expert writers are here to help you succeed!</p>
            <a href="/orders/new" class="btn primary-btn">Get Started Now</a>
        </div>
    </section>
</div>

<?php
view('partials/footer.php', ['config' => $config]);
?>
