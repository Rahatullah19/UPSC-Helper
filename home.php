<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Online Preparation Platform | UPSC </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://s3-ap-southeast-1.amazonaws.com/sg2.oliveboard.in/static/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://s3-ap-southeast-1.amazonaws.com/sg2.oliveboard.in/static/css/homepage.css" rel="stylesheet">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body id="home">
      <div class="wrapper">
         <!-- Header Area -->
         <div class="header">
            <!-- Navigation Menu -->
            <nav class="navbar navbar-fixed-top" role="navigation">
               <div class="container">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <br>
                     <?php
                        require_once('connectvars.php');
                        session_start();
                        if(isset($_SESSION['hm_id'])) {
                        	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
                        	$query1 = "SELECT first_name, last_name FROM hm_profile WHERE hm_id = " . $_SESSION['hm_id'] ;
                        		
                        	$data1 = mysqli_query($dbc, $query1);
                        	if(mysqli_num_rows($data1) == 1){
                        		$row1 = mysqli_fetch_array($data1);
                        ?>
                     <b class="navbar-brand" style="text-transform:capitalize;">Hi <?php echo $row1['first_name'] . ' ' . $row1['last_name']; ?></b>
                     <?php
                        }
                        }
                        ?>
                  </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a id="remove-home" href="#home">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#exams">Exams</a></li>
                        <li><a href="blog.php" target="_blank">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="landing_page.php">Login</a></li>
                        <li><a href="landing_page.php" class="sign-up">Register</a></li>
                     </ul>
                  </div>
               </div>
            </nav>
            <!-- Navigation End -->		
         </div>
         <!-- Header End -->	
         <!-- For navigation -->
         <section id="home">
            <div class="tp-banner-container flex">
               <div class="flexslider">
                  <ul class="slides">
                     <li class="olive-flex">
                        <div class="flex-two">
                           <h3>Ace Your Exam.</h3>
                           <p>Join the most comprehensive online preparation portal for Government exams. Explore a range of Magazines, NCERT Books and News.</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </section>
         <!-- Main Content -->
         <div class="main-content">
            <section id="features">
               <!-- features-ele Start -->
               <div class="features-ele padd">
                  <div class="container">
                     <div class="heading text-center">
                        <h2>Features</h2>
                        <div class="bor"></div>
                     </div>
                     <div class="ol-mar">
                        <div class="examCol">
                           <div class="features-ele-item">
                              <span class="img-responsive feature-bg feature-sp-c"> </span>
                              <h4><button onClick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Yojna</button></h4>
                              <div id="id01" class="w3-modal">
                                 <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:1100px;">
                                    <header class="w3-container w3-blue">
                                       <span onClick="document.getElementById('id01').style.display='none'" 
                                          class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
                                       <h2>Yojna</h2>
                                    </header>
                                    <iframe src="http://yojana.gov.in/cms/(S(3elyha55k00iub45ggvrr455))/default.aspx" width="100%" height="500px"></iframe>
                                    <div class="w3-container w3-light-grey w3-padding">
                                       <button class="w3-btn w3-right w3-white w3-border" 
                                          onclick="document.getElementById('id01').style.display='none'">Close</button>
                                    </div>
                                 </div>
                              </div>
                              <p>Yojana tries to reach people of segments in SEC ‘C’ and ‘D’ in semi-urban areas in different regions and in their languages. Although Yojana is sponsored by government and is an official venture, it is in no way is restricted to expressing the government views alone; it attempts to give praise where praise is due and criticize with constructive purpose. Yojana gives different shades of opinion and views on any issue and thereby presents a balanced picture.</p>
                           </div>
                        </div>
                        <div class="examCol">
                           <div class="features-ele-item">
                              <span class="img-responsive feature-bg feature-sp-up"> </span>
                              <h4><button onClick="document.getElementById('id02').style.display='block'" class="w3-button w3-black">Kurukshetra</button></h4>
                              <div id="id02" class="w3-modal">
                                 <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:1100px;">
                                    <header class="w3-container w3-blue">
                                       <span onClick="document.getElementById('id02').style.display='none'" 
                                          class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
                                       <h2>Kurukshetra</h2>
                                    </header>
                                    <iframe src="http://iksa.in/upsc/download-kurukshetra-magazine-free-archives/2431/" width="100%" height="500px"></iframe>
                                    <div class="w3-container w3-light-grey w3-padding">
                                       <button class="w3-btn w3-right w3-white w3-border" 
                                          onclick="document.getElementById('id02').style.display='none'">Close</button>
                                    </div>
                                 </div>
                              </div>
                              <p>Kurukshetra is a monthly journal published by the Ministry of Rural Development, Government of India. It is aimed at carrying the massage of Rural Development to the people. In fact, it serves as a forum of serious discussion of the various issues related to rural development with special focus on overall rural upliftment.
                                 Due to significance of various topics and ongoing issues related to rural development for the Civil Services Examination, we at IAS100 are introducing Summary of Kurukshetra Magazine for the IAS aspirants.
                              </p>
                           </div>
                        </div>
                        <div class="examCol">
                           <div class="features-ele-item">
                              <span class="img-responsive feature-bg feature-sp-r"> </span>
                              <h4><button onClick="document.getElementById('id03').style.display='block'" class="w3-button w3-black">NCERT</button></h4>
                              <div id="id03" class="w3-modal">
                                 <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:1100px;">
                                    <header class="w3-container w3-blue">
                                       <span onClick="document.getElementById('id03').style.display='none'" 
                                          class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
                                       <h2>NCERT</h2>
                                    </header>
                                    <iframe src="https://www.iaspaper.net/ncert-books-free-download/amp" width="100%" height="500px"></iframe>
                                    <div class="w3-container w3-light-grey w3-padding">
                                       <button class="w3-btn w3-right w3-white w3-border" 
                                          onclick="document.getElementById('id03').style.display='none'">Close</button>
                                    </div>
                                 </div>
                              </div>
                              <p>Reading NCERT Textbooks is essential for your IAS exam preparation and if you have a question on your mind or confused on which NCERT books to choose and read, then here is the solution to your doubts and confusion on which books to refer. Ideally, you should work your way through all related books from class 6 to class 12. But even in these books, some topics are more important than the others, so here’s the list of NCERT Books and topics (highlighted in colour) that has to given importance while preparing for civil service exams.</p>
                           </div>
                        </div>
                        <div class="examCol">
                           <div class="features-ele-item">
                              <span class="img-responsive feature-bg feature-sp-sp"> </span>
                              <h4><button class="w3-button w3-black">HT</button></h4>
							  <br>
                              <script type="text/javascript" src="http://output91.rssinclude.com/output?type=js&amp;id=1138094&amp;hash=3beeac689143c1883b2d04e49b4d0b9c"></script>
                           </div>
                        </div>
                        <div class="examCol">
                           <div class="features-ele-item">
                              <span class="img-responsive feature-bg feature-sp-a"> </span>  
                              <h4><button class="w3-button w3-black">Dainik Jagran</button></h4>
							  <br>
                              <script type="text/javascript" src="http://output92.rssinclude.com/output?type=js&amp;id=1138098&amp;hash=cfa1d4b2fd746ac868f4ffbd40fd840e"></script>
                           </div>
                        </div>
                        <div class="examCol">
                           <div class="features-ele-item">
                              <span class="img-responsive feature-bg feature-sp-gs"> </span>
                              <h4><button class="w3-button w3-black">BBC News</button></h4>
							  <br>
                              <script type="text/javascript" src="http://output10.rssinclude.com/output?type=js&amp;id=1138099&amp;hash=a7511f968ff5d3ae5bf22124943984e0"></script>
                           </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center martop">
                           <!--btn-join-->
                           <a href="landing_page.php"><button type="button" class="btn-join btn-theme btn-join-new">Join Now</button></a>
                        </div>
                        <!--/.btn-join-->
                     </div>
                  </div>
               </div>
            </section>
            <!-- feature end -->
            <section id="exams">
               <!-- exams-set Start -->
               <div class="exams-set padd">
                  <div class="container">
                     <div class="heading">
                        <h2 class="text-center">Exams</h2>
                        <div class="bor"></div>
                     </div>
                     <div class="ol-mar">
                        <div class="examSet text-center" style="margin: 0 auto;">
                           <div class="ol-ex-md">
                              <h3 class="examHeading">UPSC</h3>
                           </div>
                           <span class="ol-ex-md exams-sprite exam-img2 img-responsive"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- end of exmas -->
            <!-- For navigation -->
            <section id="contact">
               <!-- Contact Start -->
               <div class="contact padd">
                  <div class="container">
                     <div class="heading text-center">
                        <i class="fa fa-envelope-o color"></i>
                        <h2>Get In Touch</h2>
                        <div class="bor"></div>
                        <p>Get in touch with us for anything and everything</p>
                     </div>
                  </div>
                  <div class="container">
                     <div class="contact-info">
                        <div class="row">
                           <div class="col-md-3 col-sm-3 col-xs-12">
                              <div class="info-item">
                                 <i class="fa fa-map-marker"></i>
                                 <h4>Address</h4>
                                 <p>House no.: 183, Krishna Bhawan,<br />Radhe Shayam Phase-II,<br />Near KIET College,<br />Muradnagar, Ghaziabad<br/> U.P. 201206</p>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-12">
                              <div class="info-item">
                                 <i class="fa fa-envelope-o"></i>
                                 <h4>Email</h4>
                                 <p><a href="mailto:support@upschelper.in">support@upschelper.in</a></p>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-12">
                              <div class="info-item">
                                 <i class="fa fa-phone"></i>
                                 <h4>Call</h4>
                                 <p><strong>P</strong> : +91-87910-61385<br /></p>
                                 <p>Available Monday<br/>to Friday between<br/>9am to 6pm</p>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-12">
                              <div class="info-item">
                                 <a href="#"><i class="fa fa-question-circle"></i></a>
                                 <h4>FAQs</h4>
                                 <p>Answers to the most frequently asked questions about UPSC Helper</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="container">
                     <h5 class="contactmsg">&nbsp;</h5>
                     <!-- Contact Contents -->
                     <div class="contact-content" id="contactcontainer">
                        <h5 class="text-center">Send Your Message</h5>
                        <div class="bor"></div>
                        <br />
                        <p class="text-center">Note: For account activation queries, please drop a mail to support@upschelper.in</p>
                        <br />
                        <form action="" id="contactForm" method="post">
                           <div class="row">
                              <div class="col-md-4 col-sm-4">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="contact-name" placeholder="Enter Name..." value="">
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                 <div class="form-group">
                                    <input type="email" class="form-control" id="contact-email" name="email" placeholder="Enter Email..." value="">
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="contact-phone" name="phone" placeholder="Enter Phone..." value="">
                                 </div>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                 <div class="form-group">
                                    <textarea class="form-control" name="message" id="contact-message" rows="6" placeholder="Enter Your Message..."></textarea>
                                 </div>
                                 <input type="submit" value="Send Message"/>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- Contact End -->
            </section>
         </div>
         <!-- Main Content End -->		
         <!-- Footer start -->
         <div class="footer text-center">
            <div class="container">
               <!-- Footer Copyright -->
               <div class="copyright">
                  <p><a class="footerlinks" href="/careers.php">Careers</a> | <a class="footerlinks" href="/privacy.php">Privacy Policy</a> | <a class="footerlinks" href="/terms.php">Terms</a></p>
                  <p>&copy; Copyright 2017 - <a href="/">www.upschelper.in</a> - All Rights Reserved.</p>
               </div>
            </div>
         </div>
         <!-- Footer End -->
         <!-- Scroll to top -->
         <span class="totop"><a href="#home"> <i class="fa fa-chevron-up"></i> </a></span> 
      </div>
      <!-- Wrapper End -->
      <!-- Javascript files -->
      <script src="https://s3-ap-southeast-1.amazonaws.com/sg2.oliveboard.in/static/js/jquery.js"></script>
      <script src="https://s3-ap-southeast-1.amazonaws.com/sg2.oliveboard.in/static/js/bootstrap.min.js"></script>
      <script src="https://s3-ap-southeast-1.amazonaws.com/sg2.oliveboard.in/static/js/jquery.nav.js"></script>
   </body>
</html>