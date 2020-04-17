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
    
    

 //$_SESSION['Camping'] = $row1["Location"];
?>

                <div class="12u$">
                    <ul class="actions">
                        <li><input name ="addcamping" type="submit" class="special"/></li>
                    </ul>
            </div></form>
                </div>
        
    
</section>



