
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ventus - Unique Responsive Multi-Purpose Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Le Styles
    ================================================== -->
    <!-- These are the awesome CSS files -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/flexslider.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/responsive.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style_switcher.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/dropkick.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jquery.fancybox.css');?>" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('.slider-area').flexslider({
                animation: "slide",
                animationSpeed: 300,
                smoothHeight: true,
                slideshow: false,
            });
        });
    </script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>

<body>

<!--<ul id="navigation">-->
<!--    <li><span></span>-->
<!--        <div id="panel">-->
<!--            <div class="colour-container">-->
<!--                <a class="style_green"></a>-->
<!--                <a class="style_blue"></a>-->
<!--                <a class="style_red"></a>-->
<!--                <a class="style_turquoise"></a>-->
<!--                <a class="style_turquoise2"></a>-->
<!--                <a class="style_purple"></a>-->
<!--                <a class="style_orange"></a>-->
<!--                <a class="style_brown"></a>-->
<!--                <a class="style_black"></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </li>-->
<!--</ul>-->

<!-- BEGIN NAVIGATION
================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#"><img src="<?php echo base_url('assets/images/logo.png');?>" alt=""></a>
            <div class="nav-collapse collapse">
                <ul class="nav">

                    <!-- HOME -->
                    <li class="nav-active"><a href="#">HOME</a></li>

                    <!-- ELEMENTS -->
                    <li><a href="elements.html">ELEMENTS</a></li>

                    <!-- PORTFOLIO (DROP-DOWN) -->
                    <li class="dropdown">
                        <a href="#about" class="dropdown-toggle" data-toggle="dropdown">PORTFOLIO</a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio.html">PORTFOLIO 3-COL</a></li>
                            <li><a href="portfolio2.html">PORTFOLIO 2-COL</a></li>
                            <li><a href="portfolio3.html">FILTERED PORTFOLIO</a></li>
                            <li><a href="portfolio-view.html">PORTFOLIO SINGLE</a></li>
                        </ul>
                    </li>

                    <!-- BLOG (DROP-DOWN) -->
                    <li class="dropdown">
                        <a href="#about" class="dropdown-toggle" data-toggle="dropdown">BLOG</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-list.html">BLOG LIST</a></li>
                            <li><a href="blog-view.html">BLOG SINGLE</a></li>
                        </ul>
                    </li>

                    <!-- PAGES (DROP-DOWN) -->
                    <li class="last dropdown">
                        <a href="#about" class="dropdown-toggle" data-toggle="dropdown">PAGES</a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">ABOUT</a></li>
                            <li><a href="what-we-do.html">WHAT WE DO</a></li>
                            <li><a href="team.html">OUR TEAM</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="testimonials.html">TESTIMONIALS</a></li>
                            <li><a href="pricing.html">PRICING</a></li>
                            <li><a href="comparison.html">COMPARISON TABLE</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<!--<!-- BEGIN SLIDER-->
<!--================================================== -->-->
<!--<div class="slider">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="span12">-->
<!---->
<!--                <div class="slider-area">-->
<!--                    <ul class="slides">-->
<!---->
<!--                        <!-- SLIDE #1-->
<!--                        ==================================== -->-->
<!--                        <li>-->
<!--                            <div class="row">-->
<!--                                <div class="span12 bold-slider textcenter">-->
<!---->
<!--                                    <!-- slide #1 content -->-->
<!--                                    <div class="vcenter">-->
<!--                                        <h1 class="bold-heading">WE ARE VENTUS.</h1>-->
<!--                                        <div class="slider-buttons stripes">-->
<!---->
<!--                                            <a class="btn btn-padded btn-prime drop-shadow button-curved curved-hz-1">SIGN UP</a>-->
<!--                                            &nbsp;-->
<!--                                            <div class="btn-group">-->
<!--                                                <a class="btn"><i class="button-flash"></i></a>-->
<!--                                                <a class="btn">TAKE A TOUR</a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!---->
<!--                        <!-- SLIDE #2-->
<!--                        ==================================== -->-->
<!--                        <li>-->
<!--                            <div class="row">-->
<!--                                <div class="span12 textcenter">-->
<!---->
<!--                                    <!-- slide #2 content -->-->
<!--                                    <div class="vcenter">-->
<!--                                        <img src="--><?php //echo base_url('');?><!--assets/images/ipads.png" alt=""/>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!---->
<!--                        <!-- SLIDE #3-->
<!--                        ==================================== -->-->
<!--                        <li>-->
<!--                            <div class="row">-->
<!--                                <div class="span12">-->
<!---->
<!--                                    <!-- slide #3 content -->-->
<!--                                    <div class="slider-frame">-->
<!--                                        <div class="slider-frame-image" style="background-image: url(assets/images/laptop-top.png)">-->
<!--                                        </div>-->
<!---->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!---->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="slider-space">-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<!-- BEGIN MAIN BUBBLE-->
<!--================================================== -->-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="span12 relative">-->
<!---->
<!--            <div class="bubble">-->
<!--                <h4 class="left">CREATE A POWERFUL <span class="bold italic">SOLUTION</span> NOW</h4>-->
<!--                <a class="btn btn-padded right">GET STARTED</a>-->
<!--            </div>-->
<!---->
<!--            <div class="bubble-triangle"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="bubble-stripes"></div>-->
<!---->
<!--<!---->
<!--================================================-->
<!--// BEGIN CONTENT-->
<!--================================================-->
<!---->-->
<!--<div class="content">-->
<!---->
<!--<!-- FEATURES-->
<!--================================================== -->-->
<!--<div class="container" style="margin-top: 42px">-->
<!--<div class="row">-->
<!--    <div class="span3">-->
<!--        <div class="features drop-shadow">-->
<!---->
<!--            <div class="features-circle">-->
<!--                <img src="--><?php //echo base_url('assets/img/icon_mobile.png');?><!--" alt=""/>-->
<!--            </div>-->
<!---->
<!--            <h4><strong>SUPER</strong> RESPONSIVE</h4>-->
<!---->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet...</p>-->
<!--            <br>-->
<!--            <div class="features-read-more">-->
<!--                <a class="btn btn-small btn-prime">READ MORE</a>-->
<!--            </div>-->
<!--            <div class="features-triangle"></div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="span3">-->
<!--        <div class="features drop-shadow features-active">-->
<!---->
<!--            <div class="features-circle">-->
<!--                <img src="--><?php //echo base_url('assets/img/icon_desktop.png');?><!--" alt=""/>-->
<!--            </div>-->
<!---->
<!--            <h4><strong>SQUEEKY</strong> CLEAN</h4>-->
<!---->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet...</p>-->
<!--            <br>-->
<!--            <div class="features-read-more">-->
<!--                <a class="btn btn-small btn-prime">READ MORE</a>-->
<!--            </div>-->
<!---->
<!--            <div class="features-triangle"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="span3">-->
<!--        <div class="features drop-shadow">-->
<!---->
<!--            <div class="features-circle">-->
<!--                <img src="--><?php //echo base_url('assets/img/icon_laptop.pn');?><!--g" alt=""/>-->
<!--            </div>-->
<!---->
<!--            <h4><strong>MULTI</strong> PURPOSE</h4>-->
<!---->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet...</p>-->
<!--            <br>-->
<!--            <div class="features-read-more">-->
<!--                <a class="btn btn-small btn-prime">READ MORE</a>-->
<!--            </div>-->
<!---->
<!--            <div class="features-triangle"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="span3">-->
<!--        <div class="features drop-shadow">-->
<!---->
<!--            <div class="features-circle">-->
<!--                <img src="--><?php //echo base_url('assets/img/icon_flexible.png');?><!--" alt=""/>-->
<!--            </div>-->
<!---->
<!--            <h4><strong>HIGHLY</strong> FLEXIBLE</h4>-->
<!---->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet...</p>-->
<!--            <br>-->
<!--            <div class="features-read-more">-->
<!--                <a class="btn btn-small btn-prime">READ MORE</a>-->
<!--            </div>-->
<!---->
<!--            <div class="features-triangle"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<!--<!-- RECENT NEWS-->
<!--================================================== -->-->
<!---->
<!--<div class="row">-->
<!--    <div class="span12 textcenter">-->
<!--        <span class="content-heading">RECENT NEWS</span>-->
<!--        <div class="content-heading-stripes"></div>-->
<!--    </div>-->
<!---->
<!--    <div class="span4">-->
<!--        <div class="content-image">-->
<!--            <a href="--><?php //echo base_url('assets/images/image1.png');?><!--" class="fancybox">-->
<!--                <span class="content-image-overlay"></span>-->
<!--                <img src="--><?php //echo base_url('assets/images/image1.png');?><!--" alt="">-->
<!--            </a>-->
<!--        </div>-->
<!---->
<!--        <div class="content-bubble drop-shadow curved">-->
<!--            <h5 class="heading">BLOG TITLE</h5>-->
<!--            <p>Lorem ipsum dolor sit amet, contur adip elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>-->
<!--        </div>-->
<!--        <div class="content-bubble-triangle"></div>-->
<!--    </div>-->
<!---->
<!--    <div class="span4">-->
<!--        <div class="content-image">-->
<!--            <a href="--><?php //echo base_url('assets/images/image2.png');?><!--" class="fancybox">-->
<!--                <span class="content-image-overlay"></span>-->
<!--                <img src="--><?php //echo base_url('assets/images/image2.png');?><!--" alt="">-->
<!--            </a>-->
<!--        </div>-->
<!---->
<!--        <div class="content-bubble drop-shadow curved">-->
<!--            <h5 class="heading">BLOG TITLE</h5>-->
<!--            <p>Lorem ipsum dolor sit amet, contur adip elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>-->
<!--        </div>-->
<!--        <div class="content-bubble-triangle"></div>-->
<!--    </div>-->
<!---->
<!--    <div class="span4">-->
<!--        <div class="content-image">-->
<!--            <a href="--><?php //echo base_url('assets/images/image2.png');?><!--" class="fancybox">-->
<!--                <span class="content-image-overlay"></span>-->
<!--                <img src="--><?php //echo base_url('assets/images/image3.png');?><!--" alt="">-->
<!--            </a>-->
<!--        </div>-->
<!---->
<!--        <div class="content-bubble drop-shadow curved">-->
<!--            <h5 class="heading">BLOG TITLE</h5>-->
<!--            <p>Lorem ipsum dolor sit amet, contur adip elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>-->
<!--        </div>-->
<!--        <div class="content-bubble-triangle"></div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<!-- OUR SERVICES-->
<!--================================================== -->-->
<!---->
<!--<div class="row">-->
<!--    <div class="span12 textcenter">-->
<!--        <span class="content-heading">OUR SERVICES</span>-->
<!--        <div class="content-heading-stripes"></div>-->
<!--    </div>-->
<!---->
<!--    <div class="span3">-->
<!--        <ul class="nav nav-list" id="myTab">-->
<!--            <li class="first active"><a href="#aboutus">ABOUT US</a></li>-->
<!--            <li><a href="#profile">WHAT WE DO</a></li>-->
<!--            <li><a href="#messages">OUR TEAM</a></li>-->
<!--            <li><a href="#settings">PRICING</a></li>-->
<!--            <li><a href="#settings">HOW IT WORKS</a></li>-->
<!--            <li class="last"><a href="#settings">CAREERS</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!---->
<!--    <div class="span9">-->
<!--        <div class="tab-content">-->
<!---->
<!--            <div class="tab-pane active" id="aboutus">-->
<!--                <div class="row">-->
<!--                    <div class="span5 mobile-box">-->
<!--                        <h4><strong>The Process</strong></h4>-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
<!--                            <br><br>-->
<!--                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>-->
<!--                        <br>-->
<!--                        <a class="btn btn-prime">GET STARTED</a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="span4">-->
<!--                        <div class="content-bubble drop-shadow curved">-->
<!--                            <h3><i>WITH GREAT DESIGN COMES GREAT <strong>RESPONSIBILITY</strong></i></h3>-->
<!--                            <p> - Dumbledoor</p>-->
<!--                        </div>-->
<!--                        <div class="content-bubble-triangle"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="tab-pane" id="profile"></div>-->
<!--            <div class="tab-pane" id="messages"></div>-->
<!--            <div class="tab-pane" id="settings"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<!-- TESTIMONIALS-->
<!--================================================== -->-->
<!--<div class="row">-->
<!---->
<!--    <!-- PAGE HEADING -->-->
<!--    <div class="span8 textcenter">-->
<!--        <span class="content-heading">TESTIMONIALS</span>-->
<!--        <div class="content-heading-stripes"></div>-->
<!--    </div>-->
<!---->
<!--    <div class="span8">-->
<!--        <div class="row">-->
<!---->
<!--            <!-- TESTIMONIAL #1 -->-->
<!--            <div class="span4">-->
<!--                <div class="content-bubble drop-shadow curved">-->
<!--                    <h5 class="heading">John Smith</h5>-->
<!--                    <p><i>�Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sed do eiusmod tempor�</i></p>-->
<!--                </div>-->
<!--                <div class="content-bubble-triangle"></div>-->
<!--            </div>-->
<!---->
<!--            <!-- TESTIMONIAL #2 -->-->
<!--            <div class="span4">-->
<!--                <div class="content-bubble drop-shadow curved">-->
<!--                    <h5 class="heading">John Smith</h5>-->
<!--                    <p><i>�Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sed do eiusmod tempor�</i></p>-->
<!--                </div>-->
<!--                <div class="content-bubble-triangle"></div>-->
<!--            </div>-->
<!---->
<!---->
<!---->
<!--            <!-- TESTIMONIAL #3 -->-->
<!--            <div class="span4">-->
<!--                <div class="content-bubble drop-shadow curved">-->
<!--                    <h5 class="heading">John Smith</h5>-->
<!--                    <p><i>�Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sed do eiusmod tempor�</i></p>-->
<!--                </div>-->
<!--                <div class="content-bubble-triangle"></div>-->
<!--            </div>-->
<!---->
<!--            <!-- TESTIMONIAL #4 -->-->
<!--            <div class="span4">-->
<!--                <div class="content-bubble drop-shadow curved">-->
<!--                    <h5 class="heading">John Smith</h5>-->
<!--                    <p><i>�Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sed do eiusmod tempor�</i></p>-->
<!--                </div>-->
<!--                <div class="content-bubble-triangle"></div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <!-- TABS-->
<!--    ================================================== -->-->
<!---->
<!---->
<!--    <div class="span4">-->
<!---->
<!--        <ul class="nav nav-tabs" id="tabs">-->
<!--            <li class="active"><a href="#design">Design</a></li>-->
<!--            <li><a href="#production">Production</a></li>-->
<!--        </ul>-->
<!---->
<!--        <div class="tab-content">-->
<!--            <div class="tab-pane active" id="design">-->
<!--                <div class="content-bubble">-->
<!--                    <h5 class="heading">Design</h5>-->
<!--                    <p>-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sed do eiusmod tempor ut labore et dolore magna sed-->
<!--                        <br><br>-->
<!--                        �Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sed do eiusmod tempor�</p>-->
<!--                    <br>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="tab-pane" id="production">-->
<!--                <div class="content-bubble">-->
<!--                    <h5><strong>Production</strong></h5>-->
<!--                    <p>-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sed do eiusmod tempor ut labore et dolore magna sed-->
<!--                        <br><br>-->
<!--                        �Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sed do eiusmod tempor�</p>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<?php echo $template['body']?>
<!-- BEGIN FOOTER BUBBLE
================================================== -->
<div class="container">
    <div class="row">
        <div class="span12">

            <div class="footer-bubble">
                <div class="bubble">

                    <h4 class="left">GET IN TOUCH <span class="bold italic">NOW</span></h4>

                    <a class="btn btn-padded right">CONTACT US</a>

                </div>

                <div class="bubble-triangle"></div>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN SUB-FOOTER
================================================== -->
<div class="sub-footer">
    <div class="container">
        <div class="row">

            <div class="span3 visible-desktop visible-tablet">
                <h5 class="heading">ABOUT US</h5>
                <p>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    <br><br>
                    54 Awesome street<br>
                    Awesome Road<br>
                    Awesome City<br>
                    (123) 456 - 789
                </p>
            </div>

            <div class="span3 visible-desktop visible-tablet">
                <h5 class="heading">LATEST TWEETS</h5>
                <p>
                    <a>@Jaynesh</a> Just submitted another great item on <a>#themeforest</a><br>
                    <small>about 3 hours ago</small>

                    <br><br>

                    <a>@Jaynesh</a> Working on an awesome theme for <a>#themeforest</a><br>
                    <small>about 3 weeks ago</small>
                </p>
            </div>

            <div class="span3 visible-desktop visible-tablet">
                <div class="latest-posts">
                    <h5 class="heading">LATEST POSTS</h5>
                    <a class="first">Lorem ipsum dolor sit amet, consect</a>
                    <a>sed do eiusmod tempor incididunt</a>
                    <a>ut labore et dolore magna sed do eiusmod tempor</a>
                    <a class="last">consectetur adipisicing elit, sed do</a>
                </div>
            </div>

            <div class="span3">
                <div class="contact-alerts"></div>
                <input placeholder="Your Name" type="text" name="name" id="name">
                <input placeholder="Your Email" type="text" name="email" id="email">
                <textarea placeholder="Message" rows="3" cols="50" name="message" id="message"></textarea>
                <button id="submit" class="btn btn-black btn-full">Submit</button>
            </div>

        </div>
    </div>
</div>

<!-- BEGIN FOOTER
================================================== -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="span6">
                <p>COPYRIGHT � 2003-2012 VENTUS INC. ALL RIGHTS RESERVED.</p>
            </div>

            <div class="span6">

                <ul class="social-icons">
                    <li class="twitter"><a rel="alternate" title="Twitter"></a></li>
                    <li class="facebook"><a rel="alternate" title="Facebook"></a></li>
                    <li class="vimeo"><a rel="alternate" title="Vimeo"></a></li>
                    <li class="dribbble"><a rel="alternate" title="Dribbble"></a></li>
                    <li class="google"><a rel="alternate" title="Google +"></a></li>
                    <li class="pinterest"><a rel="alternate" title="Pinterest"></a></li>
                </ul>

            </div>
        </div>
    </div>
    <a href="#navigation" rel="alternate" title="Back to top" class="up"><img src="<?php echo base_url('');?>assets/img/icon_up.png" alt=""/></a>
</div>

<!-- Le javascript
================================================== -->
<script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/js/tinynav.js');?>"></script>
<script src="<?php echo base_url('assets/js/scroll.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.flexslider-min.js');?>"></script>
<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
<script src="<?php echo base_url('assets/js/style_switcher.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.fancybox.js');?>"></script>

</body>
</html>