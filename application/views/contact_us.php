<!-- BEGIN SLIDER
   ================================================== -->
<script type="text/javascript">
    jQuery(document).ready(function ($) {




        $('#contactForm').submit(function (e) {
            e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var message = $('#message').val();
            var formMessage = $("#formMessage");
//            if (!name) {
//                formMessage.html("Please enter your name" + "<button type='button' class='close' data-dismiss='alert'>×</button>").addClass('alert-error').addClass('alert');
//                return false;
//            }
//            if (!email) {
//                formMessage.html("Please enter your email-Id" + "<button type='button' class='close' data-dismiss='alert'>×</button>").addClass('alert-error').addClass('alert');
//                return false;
//            }
//            if (!mobile) {
//                formMessage.html("Please enter your phone number" + "<button type='button' class='close' data-dismiss='alert'>×</button>").addClass('alert-error').addClass('alert');
//                return false;
//            }
//            if (!message) {
//                formMessage.html("Please enter some message" + "<button type='button' class='close' data-dismiss='alert'>×</button>").addClass('alert-error').addClass('alert');
//                return false;
//            }
//            if(!isEmailValid(email)){
//                formMessage.html("Please enter an valid email-Id" + "<button type='button' class='close' data-dismiss='alert'>×</button>").addClass('alert-error').addClass('alert');
//                return false;
//            }
//            if(!isPhoneNumberValid(mobile)){
//                formMessage.html("Please enter a valid 10 digit number" + "<button type='button' class='close' data-dismiss='alert'>×</button>").addClass('alert-error').addClass('alert');
//                return false;
//            }
            $("#submitImage").show();
            /* Get some values from elements on the page: */
            var values = $(this).serialize();

            /* Send the data using post and put the results in a div */
            var url=$('#contactForm')[0].action;
            $.ajax({
                url: url,
                type: "post",
                data: values,
                dataType: "json",
                success: function (data) {
                    $('#contactForm')[0].reset();
                    $("#submitImage").hide();
                    formMessage.show();
                    formMessage.html(data.message + "<button type='button' class='close' data-dismiss='alert'>×</button>");
                    if (data.status) {
                        formMessage.addClass('alert-success').addClass('alert');
                    } else {
                        formMessage.addClass('alert-error').addClass('alert');
                    }

                },
                error: function () {
                    $("#submitImage").hide();
                    formMessage.html("Error while sending your query");
                }
            });
        });

    });


</script>
<div class="slider">
    <div class="container">
        <div class="row">
            <div class="span12">

                <div class="slider-area">
                    <ul class="slides">
                        <li>
                            <div class="row">
                                <div class="span12 bold-slider textcenter">
                                    <div class="vcenter">

                                        <h1 class="bold-heading">WE ARE HERE TO HELP.</h1>

                                        <div class="slider-buttons">
                                            <a class="btn btn-padded btn-prime drop-shadow button-curved curved-hz-1">CALLBACK</a>&nbsp;
                                            <div class="btn-group">
                                                <a class="btn"><i class="button-flash"></i></a>
                                                <a href="#directions" class="btn">DIRECTIONS</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- BEGIN MAIN BUBBLE
    ================================================== -->
<div class="container">
    <div class="row">
        <div class="span12">

            <div style="position: relative">
                <div class="bubble">

                    <h4 class="left"><span class="bold italic">WE ARE AVAILABLE 24/7</span></h4>


                </div>
            </div>

            <div class="bubble-triangle"></div>
        </div>
    </div>
</div>

<div class="bubble-stripes"></div>

<!-- BEGIN BREADCRUMB NAVIGATION
================================================== -->
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="breadcrumb-container">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a> <span class="divider">/</span></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--
================================================
// BEGIN CONTENT
================================================
-->

<div class="content">
    <div class="container">
        <div class="row">
            <div id="map_canvas" style="opacity: 1; width:100%; height: 100%; top: 520px;"></div>

            <div class="span12">
                <div class="row">
                    <div class="span6">
                        <div class="content-bubble drop-shadow curved">
                            <form action="<?php echo base_url('contact/post_data'); ?>" data-validate="parsley"
                                  method="post" id="contactForm">

                                <div id="formMessage">

                                </div>
                                <label>Your Name</label>
                                <input type="text" name="name" id="name">
                                <label>Your Phone Number*</label>
                                <input type="text" name="mobile" id="mobile" data-required="true" data-trigger="change"
                                       data-type="number">
                                <label>Your Email*</label>
                                <input type="text" name="email" id="email" data-required="true" data-trigger="change"
                                       data-type="email">
                                <label>Your Message</label>
                                <textarea style="height:160px" cols="50" name="message" id="message"></textarea>
                                <input type="hidden" name="source" value="contact_page">
                                <button type="submit" class="btn btn-prime btn-full">SEND</button>
                                <span> <img
                                        id="submitImage"
                                        src="assets/img/ajax-loader.gif"
                                        alt="Sending ..." style="display: none;"></span>
                            </form>

                        </div>
                    </div>
                    <div class="span6">
                        <div class="content-bubble drop-shadow curved">
                            <div class="control-group">
                                <h4>
                                    <i class="icon-map-marker"></i>
                                    Address
                                </h4>

                                <p>
                                    Rajouri Garden<br/>
                                    New Delhi
                                </p>
                            </div>


                            <div class="control-group">
                                <h4>
                                    <i class="icon-phone"></i> Contact Details
                                </h4>

                                <p> Phone: (123) 456 - 789<br>
                                    Email: info@xcdsoft.com</p>

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>


    </div>
</div>
