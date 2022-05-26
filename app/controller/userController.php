<?php
session_start();
require_once 'app/model/User.php';
require_once 'app/Dutils/Utils.php';

$user=new User();
$errorMessage = "";


// when login button is clicked
if(isset($_POST['loginbtn'])){

    if(!empty($_POST['email']) && !empty($_POST['pass'])){
        $email= Utils::sanitize_email($_POST['email']);
        $pass = $_POST['pass'];
       if( $user->login($email,$pass)){
        //    $_SESSION['user']=1;
            // header('Location: dashboard.php') ;
            return true;
        }else{

            if(!empty($user->msg)){
                $errorMessage = Utils::setFlash($user->msg[0],$user->msg[1]);
            }
        }
       
    }else{
         if(!empty($user->msg)){
            $errorMessage = Utils::setFlash($user->msg[0],$user->msg[1]);
         }
    }
}

// fetch application
$fetchResults = $user->fetchApplication($_SESSION['userid']['index_num']);
$getDept = $user->getDepartment();