<?php
require_once 'app/model/User.php';
require_once 'app/Dutils/Utils.php';

$user=new User();
$errorMessage = "";

// getting data from form
// $email= Utils::sanitize_email($_POST['email']);
// $pass = $_POST['pass'];


// when login button is clicked
if(isset($_POST['loginbtn'])){

    if(!empty($_POST['email']) && !empty($_POST['pass'])){
        $email= Utils::sanitize_email($_POST['email']);
        $pass = $_POST['pass'];
    $user->login($email,$pass);
        $errorMessage = Utils::setFlash($user->msg[0],$user->msg[1]);
    }else{
            $errorMessage = Utils::setFlash($user->msg[0],$user->msg[1]);
    }
}