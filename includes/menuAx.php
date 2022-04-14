     <?php include 'config.php' ?>
	<?php
	$cdn=$config['CDNURL'];
	?>
	 <style>
         .myname{
                 color:#222;
                 font-size:90%;
         }

}
         </style>
      <section id="top-bar">

              <div class="container">
                <div class="row">

                  <section class="col-sm-12 visible-md visible-xs  visible-sm hidden hidden-md">

                    <ul class="list-inline social-icons">
                      <li><a class="fb" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="tw" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                      <li><a class="gplus" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                      <li><a class="in" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li><br/>
                      <li class="list-icone hidden-xs">
                        <a href="#">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-icone  ">
                         <?php include 'includes/contactinfo.php' ?>
                      </li>
                      <br/>

                                                <!--<li class="list-icone">
                                        <a href="/registerux1.gmp">
                                          <i class="fa fa-user"></i> Register
                                        </a>
                                </li>-->

                                                <?php
                                                if ( $_SESSION["logged_in"] == "Y") {   ?>
                                                <li class="myname">Hello <?php echo $_SESSION["name"]; ?>,
                                </li>
                                                <li class="list-icone"><a href="/login.php?a=lo">Logout <i class="glyphicon glyphicon-log-in"></i> </a>
                                </li>
                                                <?php } else { ?>
                                                <li>
                                                  <a href="register.php">
                                                        <i class="fa fa-user"></i> Register
                                                  </a>
                                                </li>
                                <li class="list-icone">
                                        <a href="/login.php">
                                          <i class="glyphicon glyphicon-log-in"></i> Login
                                        </a>
                                </li>
                                                <?php } ?>



                      <li class="list-icone">
                        <button type="button" class="btn btn-primary btn-sm" onclick="location.href = '/trackorders.gmp'">
                          <i class="fa fa-map-marker"></i> Tracking
                        </button>
                      </li>
                <div class="clearfix"></div>
                    </ul>

                  </section>
                  <ul class="list-inline text-right hidden-sm hidden-xs">
                    <!-- <li class="pull-left hidden-sm">
                      <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i> 0123123123
                      </a>
                    </li> -->
                    <li class="pull-left hidden-sm">
                      <a href="mailto:info@getmyparcel.com">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> info@getmyparcel.com
                      </a>
                    </li>

                            <?php
                                                if ( $_SESSION["logged_in"] == "Y") {   ?>
                                                <li class="myname">Hello <?php echo $_SESSION["name"]; ?>,
                                </li>
                                                <li class="list-icone"><a href="/login.php?a=lo">Logout <i class="glyphicon glyphicon-log-in"></i> </a>
                                </li>
                                                <?php } else { ?>
                                                <li>
                                                  <a href="register.php">
                                                        <i class="fa fa-user"></i> Register
                                                  </a>
                                                </li>
                                <li class="list-icone">
                                        <a href="/login.php">
                                          <i class="glyphicon glyphicon-log-in"></i> Login
                                        </a>
                                </li>
                                                <?php } ?>



                    <li >
                      <button type="button" class="btn btn-primary btn-sm" onclick="location.href = 'trackorders.php'">
                        <i class="fa fa-map-marker"></i> Tracking
                      </button>
                    </li>
                  </ul>

                </div>


              </div>
                </section>



         <header id="header">

                <div class="container">
                        <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.php">
                        <img src="<?php echo $cdn;?>/img/logo.png" alt="" class="img-responsive hidden-xs"/>
                        <img src="<?php echo $cdn;?>/img/favicon.png" alt="" class="img-responsive visible-xs"/>
                      </a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                     <a  href="index.php" class="navbar-brand navmt9">
                        <img src="<?php echo $cdn;?>/img/logo-02.png" alt="" class="img-responsive hidden-xs logo-text"/>
                      </a>
                      <ul class="nav navbar-nav navbar-right">


                       <!--  <li><a href="/xhome.gmp"><i class="fa fa-home"></i> Home</a></li> -->

                       <?php
                                                        if ( $_SESSION["logged_in"] == "Y") {
                                                if ( $_SESSION["usertype"] == "B") {    ?>
                                                <li><a href="/businesshome.php" title=""><i class='fa fa-home'></i> Home</a></li>
                                                <?php }

                                                else {?>
                                                 <li><a href="/" title=""><i class='fa fa-home'></i> Home</a></li>
                                                 <?php }
                                                        } else {?>
                                                                 <li><a href="/" title=""><i class='fa fa-home'></i> Home</a></li>
                                                 <?php }?>






                                         <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-bars" aria-hidden="true"></i> Services <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="domestic_sameday_services.php">Sameday Services</a></li>
                                                <li><a href="domestic_overnight_services.php">Overnight Services</a></li>
                                                <li><a href="international_european_road_services.php">European Road Services</a></li>
                                                <li><a href="international_economy_air_services.php">Economy Air Services</a></li>
                                                <li><a href="gmp_express_delivery_services.php">Express Delivery Services</a></li>
                                                <li><a href="gmp_worldwide_services.php">Worldwide Services</a></li>
                          </ul>
                        </li>
                         <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-user-plus"></i> Value Added Services <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="getmyshopping.php">Get My Shopping</a></li>
                            <li><a href="getmyshopping_lang_cn.php">Get My Shopping (Mandarin Version)</a></li>
                            <li><a href="itrelocation.php">Relocation Special Service</a></li>
                                                </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-users" aria-hidden="true"></i> B2B services <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="ecommercelogisticsservice.php">eCommerce Logistics Service</a></li>
                            <li><a href="logisticsservice.php">B2B Logistics Service</a></li>
                            <li><a href="comprehensiveservice.php">B2B Comprehensive Service</a></li>
                                          </ul>
                        </li>
                                        <li class="dropdown">
                          <a href="help.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="glyphicon glyphicon-question-sign"></i> Help<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                                <li><a href="help.php">Help</a></li>
                                                <li><a href="getmyparcel-offers.php">Offers</a></li>
                                                <li><a href="faq.php">Frequently Asked Questions</a></li>
                          </ul>
                        </li>
                    </ul>
                    <div class="navwrap">
                    <ul class="nav navbar-nav navbar-right newmenu">
                          <?php
                              if ( $_SESSION["logged_in"] == "Y") {   ?>
							   <li><a href="/u_orderlist.php"><i class="fa fa-shopping-cart"></i> View Orders  </a></li>
							                                <li><a href="/u_payment.php" title=""><i class="fa fa-cc-stripe"></i> Payment </a></li>
                              <?php if ( $_SESSION["usertype"] == "B") {   ?>
							                                <li><a href="/b_invoice.php"> <i class="fa fa-file-text-o"> </i> Invoices  </a></li>
                                 <li><a href="/businessaddress.php" title=""><span class="glyphicon glyphicon-map-marker"></span> Address</a></li>
                                 <li><a href="/businessproduct.php" title=""> <i class="fa fa-cubes" aria-hidden="true"></i> Products</a></li>
                                                <?php } ?>
							   <?php if ( $_SESSION["usertype"] == "B") {   ?>
                             <li><a href="/setting.php"><i class="fa fa-cogs"></i> Settings   </a></li>   <?php } ?>
                                                <?php } ?>
                        <!--  <li><a href="faq.gmp" title="Frequently Asked Questions">FAQs</a></li> -->
                      <?php
                          if ( $_SESSION["logged_in"] == "Y") {   ?>
                           <?php if ( $_SESSION["usertype"] == "B") {   ?>
                                <!-- <li class="rightnav"><a href="/setting.php"><i class="fa fa-cogs"></i> Settings   </a></li> -->
                           <?php } ?>
                           <?php } ?>
                      </ul>
                    </div>
                    </div>
                  </div>
                </nav>
                </div>

