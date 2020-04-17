<?php
session_set_cookie_params(60);
session_start();
echo '-2';
include("database.php");


if (isset($_POST['submit'])) {



    $email = $_POST['email'];
    $pwd = $_POST['pwd'];


    //Error handlers
    echo "-1";
    if (empty($email) || empty($pwd)) {
        header("Location: Login.php?login=empty");

        exit();
    } else {
        $sql = "SELECT * FROM participant WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: Login.php");
            $_SESSION['ERROR']="Wrong Email";

            exit();
        } else {
            $sqlPwd = "SELECT * FROM participant WHERE Password2 = '$pwd' and Email = '$email' ";
            $resultPwd = mysqli_query($conn, $sqlPwd);
            $resultPwdCheck = mysqli_num_rows($resultPwd);
            if ($resultPwdCheck < 1) {

                header("Location: Login.php?login=PasswordError");
                $_SESSION['ERROR']="Wrong Email Or Password";


                exit();
            } else {
                    while($row = mysqli_fetch_array($resultPwd)) {


                    //Log in
                    $_SESSION['s_id'] = $row['TicketID'];
                    //$_SESSION['s_name'] = $row['Fname'];
                    $_SESSION['username']=$row['Fname'];
                    $_SESSION['lname'] = $row['Lname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['balance'] = $row['Balance'];
                    $_SESSION['whatever'] = $row[''];
                    $_SESSION['login']=true;
                    break;
                }
                    header("Location: Dashboard.php");



            }
        }
    }
}

