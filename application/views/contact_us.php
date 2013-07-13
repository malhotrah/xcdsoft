<!-- BEGIN SLIDER
   ================================================== -->
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

            <div class="span3">
                <div class="row">
                    <div class="span4">
                        <form action="<?php echo base_url('contact/post_data');?>" data-validate="parsley" method="post">
                            <div class="content-bubble drop-shadow curved">
                                <div class="contact-alerts"></div>
                                <label>Your Name</label>
                                <input type="text" name="name" id="name">
                                <label>Your Phone Number*</label>
                                <input type="text" name="mobile" id="mobile" data-required="true" data-trigger="change"data-type="number">
                                <label>Your Email*</label>
                                <input type="text" name="email" id="email" data-required="true" data-trigger="change" data-type="email">
                                <label>Your Message</label>
                                <textarea style="height:160px" cols="50" name="message" id="message"></textarea>
                                <input type="hidden" name="source" value="contact_page"/>
                                <button type="submit" class="btn btn-prime btn-full">SEND</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
</div>