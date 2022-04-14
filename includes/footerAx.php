<?php include('config.php'); ?>
 <?php 
 $cdn=$config['CDNURL'];
 // Logging is enabled
 if ($config['LOGGING'] == 'true' AND isset($finalLog)){ 
 ?>
 <div style="background-color:#F5F6CE;font-face:courier-new;font-size:12px;border:solid thin #DBA901">
	<p><b>Debug Logs</b></p>
	<?php echo $finalLog; ?>
	<br>
	<br>
 </div>
 <?php 
 } // end config/logging
 ?>
 
 
 <!-- Footer -->
	 <footer id="footer-links">
      <div class="container">
        <div class="row">

          <div class="col-sm-2 col-xs-12">
            <h5>General Information</h5>
            <nav>
              <ul class="list-unstyled">

                <?php
				if ( $_SESSION["logged_in"] != "Y") { ?>
                <li><a href="login.php">Login</a></li>   
				<li><a href="register.php">Sign Up</a></li>
				<?php
				}
				?>
				
                <li><a href="contact.php">Contact Us</a></li>
				<li><a href="https://getmyparcelblog.wordpress.com/" title="GetMyParcel Blog" target="_blank">Blog</a></li>
				<li><a href="faq.php">FAQs</a></li>
				<!-- <li><a  target="_blank" href="https://docs.google.com/a/ekapital.co.uk/forms/d/17EcfFwzhvSl47pHzQ63gqrIe8Mh9z5byNyFO5o0Y4k4/edit">Add a Testimonial </a></li> -->
				<li><a href="h_addreview.php">Add a Testimonial</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-sm-2 col-xs-12">
            <h5>About Us</h5>
            <nav>
              <ul class="list-unstyled">
                <li><a href="aboutus.php">Company Profile</a></li>
                <!-- <li><a href="services.gmp"> Company</a></li> -->
                <li><a href="gmpTermsAndConditions.php">Terms &amp; Conditions</a></li>
                <li><a href="wtDiffTermsAndConditions.php">Weight Difference T &amp; C</a></li>
				<li><a href="prohibitedItemsTermsAndConditions.php">Prohibited Items T &amp; C</a></li>
				<li><a href="uninsuredtandc.php">Uninsured Items T &amp; C</a></li>
				<li><a href="privacy.php">Privacy Policy</a></li>
				<li><a href="gmpTermsAndConditions.php#cancellation">Cancellation / Refunds</a></li>
               
              </ul>
            </nav>
          </div>
          <div class="col-sm-2 col-xs-12">
            <h5>Affiliates & Partners</h5>
            <nav>
              <ul class="list-unstyled">
                <li><a target="_blank" href="https://docs.google.com/a/ekapital.co.uk/forms/d/1vdrE9-fNvLpi_z7wBQX148siEeQzs6AbYNIfGhwJAyM/edit">Credit Application Form</a></li>
				<li><a href="h_addnewagent.php">Become an Agent</a></li>
				<li><a href="h_addnewaffiliate.php">Become an Affiliate</a></li>
				<li><a href="showinterest.php">Get a Business Account</a></li>

              </ul>
            </nav>
          </div>

          <div class="clearfix visible-xs"></div>

          <div class="col-sm-3 col-xs-12">
            <h5>Deliver To</h5>
            <nav>
              <ul class="list-unstyled">
                <li><a href="landingpage_india.php"> India</a></li>
				<li><a href="landingpage_usa.php"> USA</a></li>
                <li><a href="landingpage_uae.php"> UAE</a></li>
              <!--  <li><a href="landingpage_china.php"> China</a></li> -->
                <li><a href="landingpage_ghana.php"> Ghana</a></li>
                <li><a href="landingpage_nigeria.php"> Nigeria</a></li>

               <!-- <li><a href="landingpage_africa.php"> Africa</a></li> --> 
              </ul>
            </nav>
          </div>

          <div class="col-sm-3 col-xs-12">
            <h5>Payment</h5>
            
            <div class="form-group">
              <img src="<?php echo $cdn;?>/img/getmyparcel-payments-by-stripe.png" alt="Powered by Barclays" class="img-responsive"/>
            </div>
          </div>

        </div>
      </div>
    </footer>
    
   <footer id="footer-links1">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </footer>


    <footer id="footer-bottom1">
      <div class="container">
        <div class="row">
          <section class="col-md-12 ">
            <p>
            <?php  include 'includes/footercompanyinfo.php' ?></p>
          </section>
        </div>
      </div>
    </footer>
    
    <link href="<?php echo $cdn;?>/js/back-to-top/css/style.css" rel="stylesheet" type="text/css"/>

    <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>

    
<!-- Cookie Message - EU Law -->
<link href="<?php echo $cdn;?>/js/cookie-settings/cookies-message.min.css" rel="stylesheet">
<script src="<?php echo $cdn;?>/js/cookie-settings/cookies-message.min.js"></script>
    

<script>
// Message box background color
// Message box text color
// Message box links color
// Show the close icon
// Close icon color
// Close icon background color
// Show the Accept button
// Accept button text
// Show the More Info button
// More Info button text
// More Info button URL
// Cookie expire time (days)

$.CookiesMessage({
        messageText: "We use technical and analytics cookies to ensure that we give you the best experience on our website.",
        messageBg: "#d9d900",					
        messageColor: "#313140",				
        messageLinkColor: "#F0FFAA",			
        closeEnable: true,						
        closeColor: "#444444",					
        closeBgColor: "#000000",				
        acceptEnable: true,						
        acceptText: "Accept & Close",			
        infoEnable: false,						
        infoText: "More Info",					
        infoUrl: "#",							
        cookieExpire: 180						
    });
    
      var position = true;
      $(document).ready(function () {
        $('#move01').fadeIn(5000).animate({"bottom": "-500"}, 900);
        $('#move02').fadeIn(5000).animate({"bottom": "-500"}, 900);
        $('#move03').fadeIn(5000).animate({"bottom": "-500"}, 900);
        position = false;
      });

      $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 300 && !position) {
          $('#move01').fadeIn(5000).animate({"bottom": "0"}, 800);
          $('#move02').fadeIn(5000).animate({"bottom": "0"}, 1200);
          $('#move03').fadeIn(5000).animate({"bottom": "0"}, 1600);
          if (scroll >= 500 && !position) {
            $(".tagline h1").fadeOut(1000, function () {
              $(".tagline h1").fadeIn(3000);
            });
            position = true;
          }
        }
      });

      $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 1450) {
          $("#slide-left").addClass("slideInLeft01");
          $("#slide-right").addClass("slideInRight01");
        } else {
          $("#slide-left").removeClass("slideInLeft01");
          $("#slide-right").removeClass("slideInRight01");
        }
      });

      $(document).ready(function () {
        $("#add-more-parcel,#add-more-parcel2").click(function () {
          $('#add-new-qoutes').before('<div class="row qoute-row">' + $('#add-new-qoutes').html() + '</div>')
        });

      });


</script>
	