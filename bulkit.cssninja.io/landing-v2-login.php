<?php
require('layout/header.php')
?>
            </div>
        </div>

        <!-- Hero -->
        <div id="main-hero" class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-vcentered pt-50 pb-50">
                    <div class="column is-6 is-offset-3 z-index-2">
                        <!-- Login form -->
                        <div id="login-card" class="animated preFadeInLeft fadeInLeft">
                            <div class="flex-card clean-login-card">
                                <h2 class="text-bold dark-text">Log in</h2>
                                <form class="pt-10 pb-10">
                                    <div class="control-material is-secondary">
                                        <input class="material-input" type="text" required>
                                        <span class="material-highlight"></span>
                                        <span class="bar"></span>
                                        <label>Username *</label>
                                    </div>
                                    <div class="control-material is-secondary">
                                        <input class="material-input" type="text" required>
                                        <span class="material-highlight"></span>
                                        <span class="bar"></span>
                                        <label>Password *</label>
                                    </div>

                                    <div class="field mt-20">
                                        <div class="control">
                                            <label class="checkbox-wrap is-medium">
                                                    <input id="check2" type="checkbox" class="d-checkbox">
                                                    <span></span>
                                                    Remember me
                                                </label>
                                        </div>
                                    </div>

                                    <div class="mt-20">
                                        <button class="button button-cta btn-align secondary-btn is-fullwidth rounded raised no-lh">Login</button>
                                    </div>
                                </form>
                            </div>

                            <p class="has-text-centered pt-20 pb-20">
                                <a id="show-recover" class="no-account is-secondary" href="#">Lost your password?</a>
                            </p>
                        </div>
                        <!-- /Login form -->

                        <!-- Recover form -->
                        <div id="recover-card" class="animated preFadeInLeft fadeInLeft is-hidden">
                            <div class="flex-card clean-login-card">
                                <h2 class="text-bold dark-text">Reset Password</h2>
                                <form>
                                    <div class="control-material is-secondary">
                                        <input class="material-input" type="text" required>
                                        <span class="material-highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email address *</label>
                                    </div>

                                    <div class="mt-20">
                                        <button class="button button-cta btn-align secondary-btn rounded is-fullwidth raised no-lh">Reset Password</button>
                                    </div>
                                </form>
                            </div>

                            <p class="has-text-centered pt-20 pb-20">
                                <a id="show-login" class="no-account is-secondary" href="#">Back to login</a>
                            </p>
                        </div>
                        <!-- /Recover form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Hero image -->
    </div>
    <!-- /Hero and nav -->

<?php
require('layout/footer.php')
?>


    <!-- Side navigation -->
    <div class="side-navigation-menu">
        <!-- Categories menu -->
        <div class="category-menu-wrapper">
            <!-- Menu -->
            <ul class="categories">
                <li class="square-logo"><img src="assets/images/logos/square-white.svg" alt=""></li>
                <li class="category-link is-active" data-navigation-menu="demo-pages"><i class="sl sl-icon-layers"></i></li>
                <li class="category-link" data-navigation-menu="components"><i class="sl sl-icon-grid"></i></li>
                <li class="category-link" data-navigation-menu="extras"><i class="sl sl-icon-present"></i></li>
            </ul>
            <!-- Menu -->

            <ul class="author">
                <li>
                    <!-- Theme author -->
                    <a href="javascript:void(0);">
                        <img class="main-menu-author" src="assets/images/logos/cssninja.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <!-- /Categories menu -->

        <!-- Navigation menu -->
        <div id="demo-pages" class="navigation-menu-wrapper animated preFadeInRight fadeInRight">
            <!-- Navigation Header -->
            <div class="navigation-menu-header">
                <span>Demo pages</span>
                <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">	
                            <span class="icon-box-toggle"> 	
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i> 
                                </span>
                    </span>
                    </span>
                </a>
            </div>
            <!-- Navigation Body -->
            <ul class="navigation-menu">
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">weekend</span>Agency kit</a>
                    <ul>
                        <li><a class="is-submenu" href="agency.html">Homepage</a></li>
                        <li><a class="is-submenu" href="agency-about.html">About</a></li>
                        <li><a class="is-submenu" href="agency-portfolio.html">Portfolio</a></li>
                        <li><a class="is-submenu" href="agency-contact.html">Contact</a></li>
                        <li><a class="is-submenu" href="agency-blog.html">Blog</a></li>
                        <li><a class="is-submenu" href="agency-post-sidebar.html">Post sidebar</a></li>
                        <li><a class="is-submenu" href="agency-post-nosidebar.html">Post no sidebar</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">wb_incandescent</span>Startup kit</a>
                    <ul>
                        <li><a class="is-submenu" href="startup.html">Homepage</a></li>
                        <li><a class="is-submenu" href="startup-about.html">About</a></li>
                        <li><a class="is-submenu" href="startup-product.html">Product</a></li>
                        <li><a class="is-submenu" href="startup-contact.html">Contact</a></li>
                        <li><a class="is-submenu" href="startup-login.html">Login</a></li>
                        <li><a class="is-submenu" href="startup-signup.html">Sign up</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">looks</span>Landing kit v1</a>
                    <ul>
                        <li><a class="is-submenu" href="landing.html">Landing page</a></li>
                        <li><a class="is-submenu" href="landing-features.html">Feature page</a></li>
                        <li><a class="is-submenu" href="landing-pricing.html">Pricing page</a></li>
                        <li><a class="is-submenu" href="landing-login.html">Login page</a></li>
                        <li><a class="is-submenu" href="landing-signup.html">Signup page</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">invert_colors</span>Landing kit v2</a>
                    <ul>
                        <li><a class="is-submenu" href="landing-v1.html">Landing page</a></li>
                        <li><a class="is-submenu" href="landing-v1-features.html">Feature page</a></li>
                        <li><a class="is-submenu" href="landing-v1-pricing.html">Pricing page</a></li>
                        <li><a class="is-submenu" href="landing-v1-login.html">Login page</a></li>
                        <li><a class="is-submenu" href="landing-v1-signup.html">Signup page</a></li>
                    </ul>
                </li>
                <li class="has-children active-section"><a class="parent-link" href="#"><span class="material-icons">chat_bubble</span>Landing kit v3</a>
                    <ul>
                        <li><a class="is-submenu" href="landing-v2.html">Landing page</a></li>
                        <li><a class="is-submenu" href="landing-v2-features.html">Feature page</a></li>
                        <li><a class="is-submenu" href="landing-v2-pricing.html">Pricing page</a></li>
                        <li><a class="is-submenu" href="landing-v2-login.html">Login page</a></li>
                        <li><a class="is-submenu" href="landing-v2-signup.html">Signup page</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">business</span>Landing kit v4</a>
                    <ul>
                        <li><a class="is-submenu" href="landing-v3.html">Landing page</a></li>
                        <li><a class="is-submenu" href="landing-v3-pricing.html">Pricing page</a></li>
                        <li><a class="is-submenu" href="landing-v3-help.html">Help center</a></li>
                        <li><a class="is-submenu" href="landing-v3-help-category.html">Help category</a></li>
                        <li><a class="is-submenu" href="landing-v3-help-article.html">Help article</a></li>
                        <li><a class="is-submenu" href="landing-v3-signup.html">Login</a></li>
                        <li><a class="is-submenu" href="landing-v3-login.html">Sign up</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /Navigation menu -->

        <!-- Navigation menu -->
        <div id="components" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
            <!-- Navigation Header -->
            <div class="navigation-menu-header">
                <span>Components</span>
                <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">	
                            <span class="icon-box-toggle"> 	
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i> 
                                </span>
                    </span>
                    </span>
                </a>
            </div>
            <!-- Navigation body -->
            <ul class="navigation-menu">
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_quilt</span>Layout</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-layout-grid.html">Grid system</a></li>
                        <li><a class="is-submenu" href="_components-layout-navbars.html">Navbars</a></li>
                        <li><a class="is-submenu" href="_components-layout-video.html">Video background</a></li>
                        <li><a class="is-submenu" href="_components-layout-parallax.html">Parallax</a></li>
                        <li><a class="is-submenu" href="_components-layout-headers.html">Headers</a></li>
                        <li><a class="is-submenu" href="_components-layout-footers.html">Footers</a></li>
                        <li><a class="is-submenu" href="_components-layout-typography.html">Typography</a></li>
                        <li><a class="is-submenu" href="_components-layout-colors.html">Colors</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_stream</span>Sections</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-sections-features.html">Features</a></li>
                        <li><a class="is-submenu" href="_components-sections-pricing.html">Pricing</a></li>
                        <li><a class="is-submenu" href="_components-sections-team.html">Team</a></li>
                        <li><a class="is-submenu" href="_components-sections-testimonials.html">Testimonials</a></li>
                        <li><a class="is-submenu" href="_components-sections-clients.html">Clients</a></li>
                        <li><a class="is-submenu" href="_components-sections-counters.html">Counters</a></li>
                        <li><a class="is-submenu" href="_components-sections-carousel.html">Carousel</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add_check</span>Basic UI</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-basicui-cards.html">Cards</a></li>
                        <li><a class="is-submenu" href="_components-basicui-buttons.html">Buttons</a></li>
                        <li><a class="is-submenu" href="_components-basicui-dropdowns.html">Dropdowns</a></li>
                        <li><a class="is-submenu" href="_components-basicui-lists.html">Lists</a></li>
                        <li><a class="is-submenu" href="_components-basicui-modals.html">Modals</a></li>
                        <li><a class="is-submenu" href="_components-basicui-tabs.html">Tabs & pills</a></li>
                        <li><a class="is-submenu" href="_components-basicui-accordion.html">Accordions</a></li>
                        <li><a class="is-submenu" href="_components-basicui-badges.html">Badges & labels</a></li>
                        <li><a class="is-submenu" href="_components-basicui-popups.html">Popups</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add</span>Advanced UI</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-advancedui-tables.html">Tables</a></li>
                        <li><a class="is-submenu" href="_components-advancedui-timeline.html">Timeline</a></li>
                        <li><a class="is-submenu" href="_components-advancedui-boxes.html">Boxes</a></li>
                        <li><a class="is-submenu" href="_components-advancedui-messages.html">Messages</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">check_box</span>Forms</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-forms-inputs.html">Inputs</a></li>
                        <li><a class="is-submenu" href="_components-forms-controls.html">Controls</a></li>
                        <li><a class="is-submenu" href="_components-forms-layouts.html">Form layouts</a></li>
                        <li><a class="is-submenu" href="_components-forms-uploader.html">Uploader</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">adjust</span>Icons</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-icons-im.html">Icons Mind</a></li>
                        <li><a class="is-submenu" href="_components-icons-sl.html">Simple Line Icons</a></li>
                        <li><a class="is-submenu" href="_components-icons-fa.html">Font Awesome</a></li>
                        <li><a class="is-submenu" href="https://material.io/icons/" target="_blank">Material Icons</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /Navigation menu -->

        <!-- Navigation menu -->
        <div id="extras" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
            <!-- Navigation Header -->
            <div class="navigation-menu-header">
                <span>Extras</span>
                <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">	
                            <span class="icon-box-toggle"> 	
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i> 
                                </span>
                    </span>
                    </span>
                </a>
            </div>
            <!-- Navigation body -->
            <ul class="navigation-menu">
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">dashboard</span>Dashboard kit</a>
                    <ul>
                        <li><a class="is-submenu" href="dashboard.html">Main Layout</a></li>
                        <li><a class="is-submenu" href="dashboard-dark-nav.html">Dark Sidebar</a></li>
                        <li><a class="is-submenu" href="dashboard-blank.html">Blank page</a></li>
                        <li><a class="is-submenu" href="dashboard-chartjs.html">Chartjs charts</a></li>
                        <li><a class="is-submenu" href="dashboard-billboardjs.html">Billboardjs charts</a></li>
                        <li><a class="is-submenu" href="dashboard-peityjs.html">Peity charts</a></li>
                        <li><a class="is-submenu" href="dashboard-widgets-data.html">Data widgets</a></li>
                        <li><a class="is-submenu" href="dashboard-widgets-social.html">Social widgets</a></li>
                        <li><a class="is-submenu" href="dashboard-feed.html">Dashboard feed</a></li>
                        <li><a class="is-submenu" href="dashboard-feed-post.html">Feed post</a></li>
                        <li><a class="is-submenu" href="dashboard-login.html">Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /Navigation menu -->
    </div>
    <!-- /Side navigation -->

    <!-- Bulchat Button -->
    <div id="bulchat" class="open">
        <div class="chat-button open g-item"></div>
    </div>

    <!-- Back To Top Button -->
    <div id="backtotop">
        <a href="#"></a>
    </div>



    <!-- Chat widget -->
    <div id="chat-widget">
        <div class="chat-widget-body is-closed">
            <div class="chat-header">
                <div class="close-chat is-hidden-desktop is-hidden-tablet"><img src="assets/images/illustrations/icons/landing-v2/close-small.svg" alt=""></div>
                <div class="chat-team">
                    <div class="team-member has-text-centered">
                        <img src="assets/images/avatars/alan.jpg" alt="">
                        <div class="is-handwritten">Alan maynard</div>
                    </div>
                </div>
                <div class="response-delay has-text-centered">
                    Answers in less than 18 hours
                </div>
            </div>
            <div class="message-container">
                <div class="divider">
                    <span class="before-divider"></span>
                    <div class="children">Today</div>
                    <span class="after-divider"></span>
                </div>
                <div class="chat-message from">
                    <img src="assets/images/avatars/alan.jpg" alt="">
                    <div class="bubble-wrapper">
                        <div class="timestamp">02:49 pm</div>
                        <div class="chat-bubble">
                            Hey iam Alan ! Iam here to help. What can i do for you ?
                        </div>
                    </div>
                </div>
                <div class="chat-message to">
                    <div class="bubble-wrapper">
                        <div class="timestamp">02:48 pm</div>
                        <div class="chat-bubble">
                            Hello, someone out there ? I could use some help
                        </div>
                    </div>
                    <img src="assets/images/avatars/elie.jpg" alt="">
                </div>
            </div>
            <div class="message-input">
                <textarea class="" rows="1" placeholder="Send a message ..."></textarea>
                <div class="message-options">
                    <div class="emoji-button"></div>
                    <div class="attach-button"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Chat widget -->

    <!-- Core js -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/modernizr.min.js"></script>
    <!-- Plugins js -->
    <script src="assets/js/ggpopover/ggtooltip.js"></script>
    <script src="assets/js/scrollreveal/scrollreveal.min.js"></script>
    <!-- Bulkit js -->
    <script src="assets/js/main.js"></script>
    <!-- Page specific js -->
    <script src="assets/js/pages/auth.js"></script>
    <script src="assets/js/pages/landingv2.js"></script>

</body>

<!-- Mirrored from bulkit.cssninja.io/landing-v2-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Mar 2018 16:32:08 GMT -->

</html>