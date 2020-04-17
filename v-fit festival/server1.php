<?php
session_start();
$name="studmysql01.fhict.local";
$user = "dbi362335";
$pass = "123123";
$db = "dbi362335";

try{

    if($conn = mysqli_connect($name, $user, $pass, $db)){

//$dbh = new PDO("mysql:host=$name;dbname=$db",$user,$pass);
  echo "connected successfully";
    }
    else
    {
        throw new Exception("NO CONNECTION");
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}


if (isset($_POST['CheckInertd'])){
        if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		 }
    
    
    
	// REGISTER USER
if (isset($_POST['reg_user']))
		// receive all input values from the form
		$username = mysqli_real_escape_string($conn, $_POST['first']);if (empty($username)) { array_push($errors, "Username is required"); }
		$email = mysqli_real_escape_string($conn, $_POST['mail']);


    // Checkbox is selecte


//String[] resault = new String["$n""$username""$lastname""$balance""$location"];
//$id =("$n"&"$username""$lastname""$balance""$location"); 

if (1==1) {
        echo ":: ".$username."<br>";

        echo ":: ".$email."<br>";

       // echo ":: ".$spotId ."<br>";
        //echo ":: ".$nrperson."<br>";

    echo "Succeeded 1";
			//$password = md5($password);//encrypt the password before saving in the database
    $query = "INSERT INTO x (name) 
            VALUES('$username);";
		//	$query1 = "INSERT INTO participant (RFID, Fname,Lname,dob, TicketID, Password, Password2,IBAN, Balance,IsCheckedIN,Email)
        //    VALUES('$n', '$username','$lastname','$dateofbirth','$n','$password',$password2,'$iban', '$balance','null', '$email');";
           // $query2="INSERT INTO user_camping (SpotID,RFID,isChecked,nrOfPeople)
              //  VALUES(' ','$n','null',' ') ;";
  //      $query3="INSERT INTO ticket (TicketID,TotalPrice,TdateStart,TdateEnd,RFID)
     //       VALUES('$n','$price','$TdateStart','$TdateEnd','$n') ;";
    echo "Succeeded query";
            echo ":: ".$query."<br>";
         //   echo ":: ".$query3."<br>";
   


     if (mysqli_query($conn, $query)) {
                echo "Succeeded";
         $pin = mt_rand(1000, 9999);
         $_SESSION['pin']=$pin;
                //    $_SESSION['s_id'] = "your code is  ".$n." ".$username." ".$lastname ."balance ".$balance. "your Location". $location;
                    //$_SESSION['s_name'] = $row['Fname'];
                  //  $_SESSION['username']=$username;

                //    $_SESSION['email'] = $emil;
          //          $_SESSION['balance'] = $balance;
               //    $_SESSION['RFID'] = $n;
              //      $_SESSION['Camping'] = $row1["Location"];
                //    $_SESSION['SpotID'] =$spotId;
                  //  $_SESSION['login']=true;
         echo ":ssssssssss:";
    // Create email
    $headers = "From: V-fit@Yoga-festival.com\nContent-type: text/html\n";
    $to = $email;
    $subject = "V-Fit festival ticket";
    $msg = file_get_contents("../pages/confirmationEmail.php");
   // $msg = str_replace('$id', $id, $msg);
    // Send confirmation mail to user
     
    mail($to, $subject, $msg, $headers);
    echo "mail has been sent";









    // Return to homepag

   //header('location: index.php');
   //      echo "xxxxx";  
}

                            
                
                
}
            else {
                 
             echo "OOOO"; 
         echo mysqli_error($conn);      
          echo "after execute";
			
                
            }

    ?>