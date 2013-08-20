<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>XCDSOFT - Professional Web Development, WordPress, Joomla, Drupal, CMS, SAS Solutions, CRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="xcdsoft">
    <meta name="author" content="xcdsoft">
    <!-- Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Le Styles
    ================================================== -->
    <!-- These are the awesome CSS files -->
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/flexslider.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/responsive.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style_switcher.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/dropkick.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jquery.fancybox.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/parsley.css');?>" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <script>
        $(document).ready(function () {
            $('.slider-area').flexslider({
                animation:"slide",
                animationSpeed:600,
                smoothHeight:true,
                slideshow:true

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
            <a class="brand" href="<?php echo base_url('');?>"><img
                    src="<?php echo base_url('assets/images/xcd-logo.png');?>" alt=""></a>

            <div class="nav-collapse collapse">
                <ul class="nav">

                    <!-- HOME -->
                    <?php $active_home = isset($home) ? "nav-active" : ""; ?>
                    <li class="<?php echo $active_home ?>"><a href="<?php echo base_url('');?>">HOME</a></li>

                    <!-- ABOUT US -->
                    <?php $active_about = isset($about) ? "nav-active" : ""; ?>
                    <li class="<?php echo $active_about ?>"><a href="<?php echo base_url('about_us');?>">ABOUT US</a>
                    </li>

                    <!-- SERVICES -->
                    <?php $active_service = isset($services) ? "nav-active" : ""; ?>
                    <li class="dropdown <?php echo $active_service ?>">
                        <a href="<?php echo base_url('services');?>">SERVICES</a>
                    </li>

                    <!-- POTFOLIO -->
                    <li class="dropdown">
                        <a href="<?php echo base_url('portfolio');?>">PORTFOLIO</a>

                    </li>
                    <?php $active_contact = isset($contact) ? "nav-active" : ""; ?>
                    <!-- CONTACT US -->
                    <li class="last dropdown <?php echo $active_contact ?>">
                        <a href="<?php echo base_url('contact');?>">CONTACT</a>

                    </li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<?php echo $template['body']?>

<!-- BEGIN FOOTER BUBBLE
================================================== -->
<div class="container">
    <div class="row">
        <div class="span12">

            <div class="footer-bubble">
                <div class="bubble">

                    <h4 class="left">GET IN TOUCH <span class="bold italic">NOW</span></h4>

                    <a href="<?php echo base_url('contact');?>" class="btn btn-padded right">CONTACT US</a>

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

                    XCD SOFT is a professional web development, web designing and search engine optimization
                    company in Delhi (India)
                    <br><br>
                    Rajouri Garden<br>
                    New Delhi<br>
                    (123) 456 - 789
                </p>
            </div>

            <div class="span3 visible-desktop visible-tablet">
                <h5 class="heading">GET SOCIAL</h5>

                <div class="fb-like-box" data-href="https://www.facebook.com/pages/Xcdsoft/512386048830994"
                     data-width="224" data-height="250" data-show-faces="true" data-colorscheme="dark"
                     data-stream="false" data-show-border="false" data-header="false"></div>

            </div>

            <div class="span3 visible-desktop visible-tablet">
                <div class="latest-posts">
                    <h5 class="heading">LATEST TWEETS</h5>
                    <a class="twitter-timeline" href="https://twitter.com/xcdsoft" data-widget-id="362993413450252292">Tweets
                        by @xcdsoft</a>
                    <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>


                    <!--                    <a class="first">Lorem ipsum dolor sit amet, consect</a>-->
                    <!--                    <a>sed do eiusmod tempor incididunt</a>-->
                    <!--                    <a>ut labore et dolore magna sed do eiusmod tempor</a>-->
                    <!--                    <a class="last">consectetur adipisicing elit, sed do</a>-->
                </div>
            </div>

            <div class="span3">
                <h5 class="heading">SUBMIT QUERY</h5>

                <div id="contactAlerts"></div>
                <form id="footerContact" action="<?php echo base_url('contact/post_data')?>"novalidate=""
                      method="post">
                    <input placeholder="Your Name" type="text" name="name" id="footerName">
                    <input placeholder="Your Email" type="email" name="email" id="footerEmail">
                    <textarea placeholder="Message" rows="3" cols="50" name="message" id="footerMessage"></textarea>
                    <input type="hidden" name="source" id="footerSource" value="footer"/>
                    <button type="submit" id="submit" class="btn btn-black btn-full">Submit</button>
                    <span id="ajax-loader-footer" style="display: none;"><img src="<?php echo base_url('assets/images/ajax-loader.gif')?>"</span>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- BEGIN FOOTER
================================================== -->
<div class="footer">
    <div class="container">
        <div class="row">
            <p class="footer_tags"><a href="#">Web Development Company in delhi</a>|<a href="#">Low cost website
                design</a>|<a href="#">Desktop software</a>|<a href="#">Website Maintenance in delhi</a>|<a href="#">PHP
                Development</a>|<a href="#">Development
                company in Rajouri garden</a>|<a href="#">Free website quotation</a>|<a href="#">Landing Pages
                Design</a>|<a href="#">Logo Design</a>|<a href="#">Business card design</a>|<a href="#">Custom Web
                Development</a>|<a href="#">SEO</a>|<a href="#">Facebook Marketing</a>|<a href="#">Bulk Mailer
                Solution</a></p>
        </div>
        <div class="row">
            <div class="span6">
                <p>COPYRIGHT &copy;2012-2013 XCDSOFT. ALL RIGHTS RESERVED.</p>
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
    <a href="#navigation" rel="alternate" title="Back to top" class="up"><img
            src="<?php echo base_url('assets/img/icon_up.png');?>" alt=""/></a>
</div>

<!-- Le javascript
================================================== -->
<div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>

jQuery(document).ready(function ($) {
    function isEmailValid(emailAddress) {
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return filter.test(emailAddress);
    }


$('#footerContact').submit(function (e) {
e.preventDefault();
var email = $('#footerEmail').val();
var formMessage = $("#contactAlerts");
    formMessage.removeClass();

            if (!email) {
                formMessage.html("Please enter your email-Id" + "<button type='button' class='close' data-dismiss='alert'>×</button>").addClass('alert-error').addClass('alert');
                return false;
            }

            if(!isEmailValid(email)){
                formMessage.html("Please enter an valid email-Id" + "<button type='button' class='close' data-dismiss='alert'>×</button>").addClass('alert-error').addClass('alert');
                return false;
            }

$("#ajax-loader-footer").show();
/* Get some values from elements on the page: */
var values = $(this).serialize();

/* Send the data using post and put the results in a div */
var url=$('#footerContact')[0].action;
$.ajax({
url: url,
type: "post",
data: values,
dataType: "json",
success: function (data) {
$('#footerContact')[0].reset();
$("#ajax-loader-footer").hide();
formMessage.show();
formMessage.html(data.message + "<button type='button' class='close' data-dismiss='alert'>×</button>");
if (data.status) {
formMessage.addClass('alert-success').addClass('alert');
} else {
formMessage.addClass('alert-error').addClass('alert');
}

},
error: function () {
$("#ajax-loader-footer").hide();
formMessage.html("Error while sending your query");
}
});
});

});


</script>
<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/js/tinynav.js');?>"></script>
<script src="<?php echo base_url('assets/js/scroll.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.flexslider-min.js');?>"></script>
<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.fancybox.js');?>"></script>
<script src="<?php echo base_url('assets/js/parsley.js');?>"></script>

</body>
</html>