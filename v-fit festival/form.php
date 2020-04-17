

.<!DOCTYPE html>
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
    
    
    <!-- camping script -->
        <!-- scripts -->
    <!-- bootstrap core javascript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- plugin javascript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

    <script>
        $(document).ready(function()
        {
            $("#numcampspots").hide();
       

            $("#cbcampsite").click(function()
            {
                if($("#cbcampsite").prop("checked"))
                {
                    $("#numcampspots").show();
              
                }
                else
                {
                    $("#numcampspots").hide();
              
                }
            });
        });
        </script>
<!-- end scripts -->
    
    
    
    
    
<!--    <script src="js.js"></script>-->
<!DOCTYPE html>
<html >
<head>
    <title>V-FIT festival</title>
  <meta charset="UTF-8">
  
    
     <script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>
        <script type='text/javascript'>
            $(function () {
                $('#sign_up_user_first, #sign_up_user_last , #sign_up_user_last1 , #sign_up_user_last2 , #sign_up_user_last3, #sign_up_user_last4').change(function () {
                    button_disabled = false;
                    if ($("#sign_up_user_first").val() == "") { button_disabled = true; window.alert("First name is empty!") }
                 
                    if ($("#sign_up_user_last").val() == "") { button_disabled = true; window.alert("Last name is empty!") }
                    if ($("#sign_up_user_last1").val() == '') { button_disabled = true; }
                    if ($("#sign_up_user_last2").val() == '') { button_disabled = true; }
                    if ($("#sign_up_user_last3").val() == '') { button_disabled = true; }
                     if ($("#sign_up_user_last2").val() != $("#sign_up_user_last3").val()) { button_disabled = false; window.alert("passwords are not mached")}
                    if ($("#sign_up_user_last4").val() == '') { button_disabled = true; }
                    $("#x1").prop("disabled", button_disabled);                    
                });
            }); 
            
            
             $(function () {
                $('#check1,#check2, #check3').change(function () {
                    button_disabled = false;
                    if (($("#check1").val() == "") ||($("#check2").val() == "")||( $("#check3").val() == ""))  { button_disabled = true; }
              
                    $("#x2").prop("disabled", button_disabled);                    
                });
            }); 
            
             $(function () {
                $('#Bank1,#Bank2').change(function () {
                    button_disabled = false;
                    if ($("#Bank1").val() == "") { button_disabled = true; }
                    if ($("#Bank2").val() == "") { button_disabled = true; }
                    $("#x3").prop("disabled", button_disabled);                    
                });
            }); 
            
            $(function () {
                $('#Spot1,#Spot2').change(function () {
                    button_disabled = false;
                    if ($("#Spot1").val() == "") { button_disabled = true; }
                    if ($("#Spot2").val() == "") { button_disabled = true; }
                    $("#x4").prop("disabled", button_disabled);                    
                });
            }); 
            
        </script>
    
    <style>
        .white_input {color:white !important;}
        .dark_input {color:black !important;}
    </style>
    
    
    
    
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  
    <link rel="stylesheet" href="assets/css/form_css.css">
<link rel="stylesheet" href="assets/css/pAGEmain.css" />
</head>

<body>
    
						<div class="inner">
      <button class="back-button"><a href="index.php">Back to webpage</a></button><br/>
        <button class="back-button"><a href="Login.php">Already have an account!</a></button>
  <!-- multistep form --><section>
<form id="msform" method="post" action="server.php">
  <!-- progressbar -->
  <ul id="progressbar">
    
    <li class="active">Personal Details</li>
    <li >Ticket choice</li>
    <li>Payment Details</li>
    <li>Camping</li>
    <li>Overview & Confirmation</li>
  </ul>
    

  <fieldset>
   <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">Your info</h3>
    <input id="sign_up_user_first" type="text" name="first"  placeholder="First Name" class="white_input" required/>
    <input id="sign_up_user_last" type="text" name="last" placeholder="Last Name" class="white_input" required/>
    <input id="sign_up_user_last1" type="email" name="mail" placeholder="Mail" class="white_input"  required />
    <input id="sign_up_user_last2" type="password" name="pass" placeholder="Password" class="white_input" required/>
    <input id="sign_up_user_last3" type="password" name="repeatPassword" placeholder="Repeat Password" class="white_input" required/>
    <input  id="sign_up_user_last4" type="date" name="dob" placeholder="Date Of Birth" class="dark_input"/>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
     <input id='x1' type="button" name="reg_user" class="next action-button"  disabled='disabled'  value="Next" onclick="CheckInertd" />
 
       
  </fieldset>
    
    


    
      <!-ticket type--> 
        
    <fieldset>  
         <h2 class="fs-title">Ticket type</h2>
        <div> <h3 class="fs-subtitle">Choose ticket package</h3>
       
            <div>
                <input id="check1" type="checkbox" name="dayOne" >
                <label for="check1"> day one 20$</label>
            </div>
    <input id="check2" type="checkbox" name="dayTow" >
    <label for="check2"> two days 35$</label>
        </div> 
    <div>
        <input id="check3" type="checkbox" name="fullTicket" >
        <label for="check3"> Full tickets 55$</label>
    </div>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input id='x2'  type="button" name="reg_user" class="next action-button" value="Next"  disabled='disabled'  />
       
     
  </fieldset>
    
    <!-payment details-->
    
    <fieldset>
       
    <h2 class="fs-title">Payment Details</h2>
    <h3 class="fs-subtitle">Your Card info</h3>
    <input id="Bank1" 
           style="
        .black_input {color:white!important}"
      
        type="text" name="Iban" placeholder="Number on the Card" />
        <label  style="color:Green  !important " for="Bank2"> Number of balance </label>
             <input style="color:Green  !important "  id="Bank2" type="number" name="balance" placeholder="Number of balance"  title="Number of balance" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
   <input id="x3" type="button" name="reg_user" class="next action-button"  value="Next"  disabled='disabled'  />
        
  </fieldset>
    
    
    <!-Camping spot-->
    <fieldset>
    <h2 class="fs-title">Camping</h2>
    <h3 class="fs-subtitle">info</h3>
         
     
       

<!-- order ticket -->
       
            <div>


                 
                        <!-- input check campspot -->
                        <div class="row">
                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >
                                       <h1 style="color:Green  !important "> campsite !!!!</h1>&nbsp;&nbsp;&nbsp;
                                        <input name="checkLocation" type="checkbox"  style="color:Green  !important "  type="checkbox" id="cbcampsite"
                                            title="check if you would like to order campspots">
                                    </label>
                                </div>
                            </div>
                  </div></div>
                        <!-- end check campspot -->

                        <!-- input # campspots -->
                        <div class="row">
                            <div class="col-md-12">
                                <div id="numcampspots"  style=" color: black !important;" >
                                      <div id="numcampspots"> <img src="map.png"  style="width:350px;height:350px;"></div> 
                                   
                                    

<?php   
$name="studmysql01.fhict.local";
$user = "dbi362335";
$pass = "123123";
$db = "dbi362335";      
                                    $conn = mysqli_connect($name, $user, $pass, $db);
                                    $query="select * from camping where NrPeople !='6' ";
                                    $result1 = mysqli_query($conn ,$query);
        ?>

                                    <select name="location">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1["Location"];?>">
                
            <?php echo $row1["Location"];?> (<?php echo $row1["NrPeople"];?>persons)                       
             </option>

            <?php endwhile;?>
                       
          
                                    
                                    </select>
                                </div>
                            </div>
                           
                        <input id="checkX" type="checkbox" name="CampCheck"  >
                                <label for="checkX"> Comfirm camp spot??!!</label>
                        </div>
                        <!-- end campspots -->
                  <input type="button" name="previous" class="previous action-button" value="Previous" />
 
                  <input id='x4' type="button" name="reg_user" class="next action-button"  value="Next"  />
      
  </fieldset>
    

    
    
  <fieldset>
   <h2 class="fs-title"> Overview & Confirmation</h2>
<h3 class="fs-subtitle">Thanks For registeration !! Click submit to confirm</h3>
     

    <input type="button" name="previous" class="previous action-button" value="Previous" />
   <input type="submit" name="reg_user" class="next action-button" value="submit"  />
  </fieldset>
    
</form></section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

    <script  src="form_js.js"></script>
        
        
        
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
					</footer></div></body></html></head></html>

