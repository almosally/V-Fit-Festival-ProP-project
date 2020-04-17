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


if (isset($_POST['login_user'])){

   if(!empty($_POST['email'])&&!empty($_POST['Password'])){
       $email = $_POST['email'];
       $password = filter_var($_POST['Password2'],FILTER_SANITIZE_STRING);
echo ":: ".$email."<br>";
    echo ":: ".$password."<br>";
   }
try{
 $handler = new PDO('mysql:host=$name;dbname=$db",$user,$pass');
   $handler -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   // try{

   // if($conn = mysqli_connect($name, $user, $pass, $db))
    $email =$_POST['email'];
    $password = $_POST['password'];
    $str = $handler -> prepare ("select email, Password2 from users where username='".$email."' and password='".$password."'");
    $str ->bindParam('".$email."',$email, PDO::PARAM_STR);
    $str ->bindParam('".$password."', $password,PDO::PARAM_STR);
    $str ->execute();
    $em =$str->fetchColumn();
    
    if($em == true){
       // session_register("userID");
       // session_register("password");
        
        //session
        $_SESSION['username']= $_POST['username'];
       $_SESSION['Start']= time();
         $_SESSION['expire']=  $_SESSION['Start']+7;
        
        //setCookies
       // setcookie("username",$_POST['userID'],mktime()+(60*3),"/");
       // setcookie("user1",time(), mktime()+(60*3),"/");
        
       // $str->$handler ->prepare("select pcn from users where email ='".$email."'");
        //$str ->execute();
        
      //  $em2 =$str ->fetchColumn();
        
       header('location:index.php');
    }else{
        echo "username or password incorrect";
    }
} catch (PDOException $e){
    echo $e->getMessage();
    die();
}
}
elseif(empty($_POST['email']) &&!empty($_POST['Password'])){
    echo "<font color = 'red'> Error: Enter your student number or staff number.</font>";

}else if(!empty ($_POST['email'])&&empty($_POST['Password'])){
    echo"<font color ='red'> Error: Enter your Password</font>";
    
}else{
    echo "";
}