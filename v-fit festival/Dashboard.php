<?php
session_start();
/*if(!$_SESSION['login'])
{
    header('Location: Login.php');
    die;
}*/
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DashBoard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
        <script src="CustomJs.js"></script>![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">Vfit</a></h1>
                        <nav id="nav">
                            <ul>
                                <li class="special">
                                    <a href="#menu"  onclick=" {

                                    }" class="menuToggle"><span>Menu</span></a>
                                    <div id="menu">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="logout.php">Log Out</a></li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
					</header>

				<!-- Main -->
					<article id="main" style="height: 110%">
						<header style="padding-left: 10px">
							<h2>Welcome
                            <?=$_SESSION['username']?></h2>
                          
                            <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=welcome <?=$_SESSION['s_id']?>&choe=UTF-8'" />
							<p>Here you can see your details for the V-Fit Festival</p>
						</header>
                        <section id="Information" class="wrapper alt style2">
                            
                            
                            
                            
                            
                            <section class="spotlight">
    <div class="image"><img src="images/Camping.jpg" alt=""/></div>
    <div class="content">
        <h2>My Campsite</h2>
        <form method="post" action="#">
            <div class="row uniform">
                <div class="12u$">
<?php   
$name="studmysql01.fhict.local";
$user = "dbi362335";
$pass = "123123";
$db = "dbi362335";      
                                    $conn = mysqli_connect($name, $user, $pass, $db);
                                    $query="select * from camping where NrPeople !='6' ";
                                    $result1 = mysqli_query($conn ,$query);
                                  
                    
                                    $Spotid="SELECT SpotID FROM camping WHERE Location='location'";	
                                   //$query3="SELECT NrPeople FROM camping WHERE Location='location'";
                                    $result1 = mysqli_query($conn ,$query);
                                 //   $result2=$conn->query($Spotid);
                                    
                                 //   $spotIdX=$result2[0,0];
                            
                                  //  $result3=$conn->query($query3);
        ?>

                                    <select name="location">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

                                                
                                        
          <?php $answer=$row1['Location']  ;?>                           
                                        
                                        
      $sothing.="<option value="<?php echo($answer) ?>">
                
            <?php echo $row1["Location"];?>     (<?php echo $row1["NrPeople"];?>persons)             
                                                            </option>"   

            <?php endwhile;?>
                       
          
                                        <!--<input type="number" name="nrPersons" class="form-control" id="numcampspots" 
                                          placeholder="num of campspots"  min="1" max="'.$row1['NrPeople'].'";value="<php echo $row1["Location"];?>">
                                      title="enter the number of campspots you would like.">  -->
                                    </select>
                                </div>
                            </div>
                           

            
                  <?php 
    
if (isset($_POST['addcamping'])){
    

//echo $row["Location"];
//$query4  = "INSERT INTO user_camping (SpotID,RFID,isCheckedIN,nrOfPeople) 
//VALUES('$spotIdX','111','0','$query3');";

 $sql  = "UPDATE camping set NrPeople=Nrpeople+1 where Location='" . $_POST["location"] . "';" ;
 mysqli_query($conn ,$sql);
    
 $_SESSION['Camping'] = $_POST["location"];    
    
    
}
 //$_SESSION['Camping'] = $row1["Location"];
?>

                <div class="12u$">
                    <ul class="actions">
                        <li><input name ="addcamping" type="submit" class="special"/></li>
                    </ul>
            </div></form></div></section>

                            
                         <section class="spotlight">
    
    <div class="image"><img src="images/Stands.jpg" alt=""/></div>
    <div class="content">
        <h2>Add to Your Workshops</h2>
        <form method="post" action="#">
            <div class="row uniform">
                <div class="12u$">
                    <div class="select-wrapper">
                       <?php 
 $name="studmysql01.fhict.local";
$user = "dbi362335";
$pass = "123123";
$db = "dbi362335";

      $conn = mysqli_connect($name, $user, $pass, $db);
        $query="select * from workshop where NrPeople < Wcapacity ";
         $result1 = mysqli_query($conn ,$query);
                        
  
         ?>
          
         
         <select  name="workshopCheck">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1["Wname"];?>"><?php echo $row1["Wname"];?> (<?php echo (50-$row1["NrPeople"]);?>,  empty space)</option>

            <?php endwhile;?>

        </select>
                    </div>
                </div>

                 <?php 
    
if (isset($_POST['addWorkshop'])){
    

//echo $row["Location"];
//$query4  = "INSERT INTO user_camping (SpotID,RFID,isCheckedIN,nrOfPeople) 
//VALUES('$spotIdX','111','0','$query3');";

 $sql  = "UPDATE workshop set NrPeople=NrPeople+1 where Wname='" . $_POST["workshopCheck"] . "';" ;
 mysqli_query($conn ,$sql);
    
     $_SESSION['workshop'] = $_POST["workshopCheck"]; 
    
}
 //$_SESSION['Camping'] = $row1["Location"];
?>
                
                <div class="12u$">
                    <ul class="actions">
                        <li><input name="addWorkshop" type="submit" value="Register" class="special"/></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>   
                            
                            
                            
                            
               <section class="spotlight">
    <div class="image"><img src="images/Payment.jpg" alt=""/></div>
    <div class="content">
        <h2>Your Wallet</h2>
        <form method="post" action="#">
            <div class="row uniform">
                <div class="12u$">

                <?php
                include("database.php");




                echo   "<h3> Account Holder :  " . $_SESSION['username'] . ", " . $_SESSION['lname'].
                        "<h3>Balance: " . $_SESSION['balance'].",<br> Your Location " .$_SESSION['Camping']. "<br> workshop  ".$_SESSION['workshop'].""
                    
                    
                    ?>;
                             
                </div>


            </div>
        </form>
    </div>
</section>             
                            
                            
                            
                            <?php

                         
                            //include ('Dashboard-Campsite.php');
                            //include ('Dashboard-AddWorkshop.php');
                            //include ('Dashboard-MyWallet.php');

                            ?>


                        </section>
                    </article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://CodeIT.net">CodeIT</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
            <script src="CustomJs.js"></script>

	</body>
</html>