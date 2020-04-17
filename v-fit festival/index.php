<?php 
	session_start(); 

	/*if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title>V-FIT festival</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="js.js"></script>
        
     
        
       
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php">V-FIT FESTIVAL</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.php">Home</a></li>
											<li><a href="#Schedule" class="more scrolly">Schedule</a></li>
                                            <li><a href="#Information" class="more scrolly">Information</a></li>
                                            <li><a href="#Contact" class="more scrolly">Contact</a></li>
											<li><a href="form.php">Sign Up</a></li>
											<li><a href="Login.php">Log In</a></li>                                 
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>V-Fit Festival</h2>
							<p>Welcome to the YOGA Festival<br />
							 buy tickets<br />
							 <a href="form.php" class="button special">here</a></p>
							<ul class="actions">
								<li><a href="Login.php" >log in</a></li>
							</ul>
						</div>
						<a href="#Schedule" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="Schedule" class="wrapper style1 special">
						<div class="inner">
							<header class="major ryan">

								<h2>FRIDAY AUGUST 25</h2>
								<br />
								<h3>Intro Day</h3>
								<br />
								<h4>09:30-10:00 | OPENING PARTY </h4><br />
								<h4>13:15-15:15 | Yogi Ram "Hatha Yoga" Algined with your heart</h4><br/>
								<h4>14:30-15:45 |  Nancy Reijerts Iyengar Yoga</h4><br/>
								<h4>16:00-16:45 |  Healthy living workshop</h4><br/>
								<h4>17:00-20:00 |  Special 3:Nathalie Jagir Peter "Kundalini Shakti Dance"</h4><br /><br/>



								<!----Template---->
								<h2>SATURDAY AUGUST 26</h2>
								<br />
								<h4>8:00| Breakfast </h4>
								<p>Grab some snacks and coffee, sign up for a workshops, and start the day getting to know your fellow V-fitCampers.
								</p>
								<h4>10:15-11:30 | Mariet Verhangen "Hatha Yoga"</h4><br />
								<h4>11:45-13:00 | Judith Woithe "Critical Algnment"</h4><br />
								<h4>13:15-14:30 | Jaap Spaans "Yoga & Running"</h4><br />
								<h4>15:45-17:00 | Marcel Remme "Yoga Backpath"</h4><br />
								<h4>19:00-20:00 | ANATOMIE & YIN YOGA WorkShop</h4><br />


								<br />

								<!--Template End-->
								<h2>Sunday AUGUST 27</h2>
								<br />
								<h4>8:00 AM | Breakfast </h4>
								<p>Grab some snacks and coffee, sign up for a workshops, and start the day with fresh breathing exercises
								</p>
								<h4>10:30-11:45 | Mo Stipsen "Bootcamp Yoga"</h4><br />
								<h4>12:00-13:45 | Marijolein Triessccheijn/Rianne van Huijstee "YOGA&FOOD"</h4><br />
								<h4>14:00-15:00 | Aafke Van Sprundel Awaken the wisdomof the heart chakra</h4><br />
								<h4>15:15-16:30 | Machteld Mager "Hara Yoga"</h4><br />
								<h4>16:45-19:00 | After Party!!!</h4><br />
								<br />
							</header>

							<h2 id="timer"></h2>
							<!--<ul class="icons major">
								<li><span class="icon major style1"><span class="label"></span></span></li>
								<li><span class="icon fa-heart-o major style2"><span class="label"></span></span></li>
								<li><span class="icon fa-code major style3"><span class="label"></span></span></li>
							</ul>-->
						</div>
					</section>

				<!-- Two -->
               <section id="Information" class="wrapper alt style2">
					<section  class="spotlight">
							<div class="image"><img src="images/Stands.jpg" alt="" /></div><div class="content">
								<h2>Shops and loan stands</h2>
								<p>Enjoy some of your favourite drinks and food at our shops or rent all the equipment that you need at our exclusive loan stands!.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/Camping.jpg" alt="" /></div><div class="content">
								<h2>camping spots
								</h2>
								<p>Why are the guests of Camping park Kuierpad this cheerful and relaxed? Because they feel right at home with us - our campsite is fitted with all needed conveniences to feel like you are home!.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/Festival.jpg" alt="" /></div><div class="content">
								<h2>3 days 4 workshops <br/>
                            12 speakers 5000+ attendees</h2>
								<p>This year we wanted to enlarge the V-Fit experience and with that in mind we decided to give to you four amazing workshops. From diet planning to yoga as a way of living, with experienced mentors who define all of this, we are sure that these workshops will empower your craft..</p>
							</div>
						</section>
                        
                        	<section class="spotlight">
							<div class="image"><img src="images/Payment.jpg" alt="" /></div><div class="content">
								<h2>v-fit goes digital</h2>
								<p>From this year on V-Fit goes digital - you don't need to bring cash; you pay and rent with your bracelet!</p>
							</div>
						</section>

                        	<section class="spotlight">
							<div class="image"><img src="images/Party.jpg" alt="" /></div><div class="content">
								<h2>After party</h2>
								<p>Wrapping up V-Fit, this is a great opportunity for speakers, guests and audience alike to get together in a relaxed and upbeat environment, to enjoy, discuss and interact. Not to be missed!.</p>
							</div>
						</section>
                </section>

				<!-- Three -->
				<section id="Contact" class="wrapper style1 fade-up">
                
                          
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
						<div class="inner">
							<h2>Lets keep in touch</h2>
							<p>
								Registration for the Yoga Festival 2018 is possible from 1 July 2018<br/>
								Are there any questions about your existing registration Yoga Festival 2018<br/>
								Contact us using the form below
							</p>
							<div class="split style1">
								<section>
									<ul class="contact">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9640.019586824177!2d6.7236901!3d52.8402968!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe1bd06427483d7af!2sMolecaten+Park+Kuierpad!5e0!3m2!1sen!2snl!4v1510577352669" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
									</ul>
								</section>
								<section>
                                    
                                <div>      <h3><b>address:</b> rachelsmolen 1, eindhoven</h3>
                <h3><b>phone:</b> 08850 80000</h3>
                <h3><b>email:</b> info@Yogafest.com </h3>
                <br>
                                    <h5>for sponsors to  contact:
                        <a href="mailto:almosally.mhd@Gmail.com.com">
                            <span style="color:black;text-decoration:underline;">V-Fit@Yogafest.com</span>
                                        </a></h5>
            </div>
                                    
    <!--                                
if(isset($_POST['submit'])){
    $to = "almosally.mhd@gmail.com"; 
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?><form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="send">
                                    
                                    </form>-->
								</section>

							</div>
						</div>
					</section>


				
				<!-- Footer -->
				
<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Sponsors</h2>
								<div class="box alt">
									<div class="row uniform 50%">
										<div class="4u"><span class="image fit"><img src="images/s1.jpg" alt="" /></span></div>
										<div class="4u"><span class="image fit"><img src="images/s2.png" alt="" /></span></div>
										<div class="4u"><span class="image fit"><img src="images/s4.jpg" alt="" /></span></div>
										<div class="4u"><span class="image fit"><img src="images/s5.png" alt="" /></span></div>

									</div>
								</div>

							</header>

						</div>
					</section>



<!-- Footer -->


					<footer id="footer">
						<ul class="icons">
							<li><a href="www.twitter.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="www.facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="www.instagram.com" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="mail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>Design: <a href="http://CODEIT.net">CodeIT Technologies</a></li>
						</ul>
					</footer>

			</div>



	</body>
</html>