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
		if (empty($password)) { array_push($errors, "Password is required"); }
        if (empty($dateofbirth)) { array_push($errors, "Date of birth is required"); }
        if (empty($balance)) { array_push($errors, "Balance is required"); }
        if (empty($iban)) { array_push($errors, "Iban is required"); }
        if (empty($location)) { array_push($errors, "Location is required"); }  }
    
    
    
	// REGISTER USER
if (isset($_POST['reg_user']))
		// receive all input values from the form
		$username = mysqli_real_escape_string($conn, $_POST['first']);if (empty($username)) { array_push($errors, "Username is required"); }
        $lastname = mysqli_real_escape_string($conn,$_POST['last']);
		$email = mysqli_real_escape_string($conn, $_POST['mail']);
		$password = mysqli_real_escape_string($conn, $_POST['pass']);
        $password2 = mysqli_real_escape_string($conn, $_POST['repeatPassword']);
		$dateofbirth = mysqli_real_escape_string($conn, $_POST['dob']);
        $balance = mysqli_real_escape_string($conn, $_POST['balance']);
        $iban = mysqli_real_escape_string($conn, $_POST['Iban']);
        
       
        
       
//ticket//
$price =0;
$TdateStart = "";
$TdateEnd ="";
if (isset($_POST["dayOne"])) { $price= 20 ; $TdateStart='2018-04-07'; $TdateEnd='2018-04-08';}

    // Checkbox is selected
elseif(isset($_POST["dayTow"])){$price=35 ;$TdateStart='2018-04-07'  ; $TdateEnd='2018-04-09';}
if(isset($_POST['fullTicket'])) {
    $price=55 ; 
    $TdateStart='2018-04-07'  ; 
    $TdateEnd='2018-04-10';
}
//camping

if(isset($_POST['CampCheck'])) {
        $location = mysqli_real_escape_string($conn, $_POST['location']);
       // $qry1 = "select SpotID from camping  ";
        //$result1 = mysqli_query($conn,$qry1);
       // while($row1 = mysqli_fetch_array($result1)){
           // $spotId=$qry1;
        //}   
        
        //$qry2="UPDATE camping set NrPeople=NrPeople+1 where SpotID='" . $spotId . "';";
        // $nrperson = mysqli_query($conn,$qry2);
        //$nrPersons='1';
       // echo "got if";
}else{
        $location ="null";
        $nrpersons =0;
        $spotId =0;
     
        echo "got else";
};
$n = rand(0,100000);

//String[] resault = new String["$n""$username""$lastname""$balance""$location"];
//$id =("$n"&"$username""$lastname""$balance""$location"); 

if (1==1) {
        echo ":: ".$username."<br>";
        echo ":: ".$lastname."<br>";
        echo ":: ".$email."<br>";
        echo ":: ".$dateofbirth."<br>";
        echo ":: ".$iban."<br>";
        echo ":: ".$balance."<br>";
        echo ":: ".$price."<br>";
        echo ":: ".$TdateStart."<br>";
        echo ":: ".$TdateEnd."<br>";
        echo ":: ".$location."<br>";
       // echo ":: ".$spotId ."<br>";
        //echo ":: ".$nrperson."<br>";
    
    
			$password = md5($password);//encrypt the password before saving in the database
			$query1 = "INSERT INTO participant (RFID, Fname,Lname,dob, TicketID, Password, Password2,IBAN, Balance,IsCheckedIN,Email) 
            VALUES('$n', '$username','$lastname','$dateofbirth','$n','$password',$password2,'$iban', '$balance','null', '$email');";
           // $query2="INSERT INTO user_camping (SpotID,RFID,isChecked,nrOfPeople)
              //  VALUES(' ','$n','null',' ') ;";
       $query3="INSERT INTO ticket (TicketID,TotalPrice,TdateStart,TdateEnd,RFID)
            VALUES('$n','$price','$TdateStart','$TdateEnd','$n') ;";
            
            echo ":: ".$query1."<br>";

            echo ":: ".$query3."<br>";
         //   echo ":: ".$query3."<br>";
            //$query = "SELECT * FROM participant WHERE RFID=1";
           // $res = mysqli_query($conn, $query);
            //mysqli_free_result($res);
                    //echo $res;
 
//if (mysqli_query($conn, $query1) & mysqli_query($conn, $query2) & mysqli_query($conn, $query3) ) {
               echo ":ssssssssss:";
     if (mysqli_query($conn, $query1) & mysqli_query($conn, $query3) /*& mysqli_query($conn, $query3)*/) {
                echo "Succeeded";
               
                    $_SESSION['s_id'] = "your code is  ".$n." ".$username." ".$lastname ."balance ".$balance. "your Location". $location;
                    //$_SESSION['s_name'] = $row['Fname'];
                    $_SESSION['username']=$username;
                    $_SESSION['lname'] = $lastname;
                    $_SESSION['email'] = $emil;
                    $_SESSION['balance'] = $balance;
                    $_SESSION['RFID'] = $n;
                    $_SESSION['Camping'] = $row1["Location"];
                    $_SESSION['SpotID'] =$spotId;
                    $_SESSION['login']=true;
                     
    // Create email
    $headers = "From: V-fit@Yoga-festival.com\nContent-type: text/html\n";
    $to = $email;
    $subject = "V-Fit festival ticket";
    $msg = file_get_contents("confirmationEmail.php");
    $msg = str_replace('$id', $id, $msg);
    // Send confirmation mail to user
     
    mail($to, $subject, $msg, $headers);
    echo "Succeeded";
    // Return to homepage
   header('location: Dashboard.php');
   //      echo "xxxxx";  
}

                            
                
                
}
            else {
                 
             echo "OOOO"; 
         echo mysqli_error($conn);      
          echo "after execute";
			
                
            }

    ?>