

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
<!--    <script src="js.js"></script>-->
<!DOCTYPE html>
<html >
<head>
    <title>V-FIT festival</title>
  <meta charset="UTF-8">
  
    
    
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  
    <link rel="stylesheet" href="../MyWebSite/assets/css/form_css.css">
    <link rel="stylesheet" href="../MyWebSite/assets/css/pAGEmain.css" />
</head>

<body>
    
						<div class="inner">
      <button class="back-button"><a href="index.php">Back to webpage</a></button><br/>
        <button class="back-button"><a href="login.php">Already have an account!</a></button>
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
    <h2 class="fs-title">Camping</h2>
    <h3 class="fs-subtitle">info</h3>
         
     

    
    
<!-- order ticket -->
      <section id="order">
          
               
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
          
          
          <div>

              <form>

                 
                        <!-- input check campspot -->
                      <!-- order ticket -->
       
            <div>


                 
                        <!-- input check campspot -->
                        <div class="row">
                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >
                                       <h1 style="color:Green  !important "> campsite !!!!</h1>&nbsp;&nbsp;&nbsp;
                                        <input  type="checkbox"  style="color:Green  !important "  type="checkbox" id="cbcampsite"
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
                                      <div id="numcampspots"> <img src="../rgstr1/map.png"  style="width:350px;height:350px;"></div> 
                                      </div>

<?php   
$name="studmysql01.fhict.local";
$user = "dbi362335";
$pass = "123123";
$db = "dbi362335";      
                                    $conn = mysqli_connect($name, $user, $pass, $db);
                                    $query="select * from camping where NrPeople !='6' ";
                                   
                                    $result1 = mysqli_query($conn ,$query);
                              
                                    
                                    
        ?>

                                    <select >
<?php echo $row2["NrPeople"];?>">
            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option name="location" value="<?php echo $row1["Location"];?>">
                
            <?php echo $row1["Location"];?> (<?php echo $row1["NrPeople"];?>persons)                       
             </option>

            <?php endwhile;?>
                    
          
                                    </select>
                                </div>
                            </div>
              
                           
                  </div></div><div id="numcampspots" > <input id="check1" type="checkbox" name="CampCheck"  >
                                <label for="check1"> reserve a camp spot??!!</label></div></section>
                        <!-- end campspots -->
                  <input type="button" name="previous" class="previous action-button" value="Previous" />
 
                  <input id='x4' type="button" name="reg_user" class="next action-button"  value="Next"  />
      
  </fieldset>
    

    
    
  <fieldset>
   <h2 class="fs-title"> Overview & Confirmation</h2>
<h3 class="fs-subtitle">This page will show all of the details that the user has inputed, so that they can confirm them and continue with the purchase!</h3>
      <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$id&choe=UTF-8'" />
 <input id="check1" type="checkbox" name="CampCheck"  >
                            <label for="check1"> reserve a camp spot??!!</label>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
   <input type="submit" name="reg_user" class="next action-button" value="submit"  />
  </fieldset>
    
 <!-- info -->   

        