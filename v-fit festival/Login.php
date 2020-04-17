<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>V-FIT festival</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css"/>

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ie9.css"/><![endif]-->
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]>
    <script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>
<!--    <script src="js.js"></script>-->
</head>
<body>

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1><a href="index.php">V-FIT FESTIVAL</a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.html#Schedule">Schedule</a></li>
                            <li><a href="index.html#Information">Information</a></li>
                            <li><a href="Register.php">Sign Up</a></li>
                            <li><a href="index.html#Contact">Contact</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <article id="main">
        <header>
            <h2>Log In</h2>
            <p>For Health and Happiness</p>
        </header>
        <div id="signin" class="same" >
            <section>

                <form method="POST" action="Login-Function.php">
                <div class='row uniform'>


                    <div class='6u$ 12u$(xsmall)'>
                        <input type='email' name='email' id='demo-email' value='' placeholder='Email'/>
                    </div>

                    <div class='6u 12u$(xsmall)'>
                        <input type='password' name='pwd' id='demo-name' value='' placeholder='Password'/>
                    </div>
                    <br />
                <?php
                session_start();
                if(!empty($_SESSION['ERROR']))
                {
                   unset( $_SESSION['ERROR']);
                    ?>


                        <p style="color: #e10008">Incorrect Info</p>

                     <?php
                };

                ?>



                    <div class='12u$'>
                        <ul class='actions'>


                            <li><input type='submit' name="submit" value='Log In' class='special'/></li>
                        </ul>
                    </div>

                </div>
                </form>
            </section>
        </div>



    </article>

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