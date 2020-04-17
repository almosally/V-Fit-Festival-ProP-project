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