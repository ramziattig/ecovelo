<?php

require_once "../models/user.php";

if (isset($_GET['event']) && !empty($_GET['event'])) {
    
    $event = $_GET['event'];

    if ($event == "register") {
        
        $user = new User();

        $user->fullname = $_POST['fullname'];
        $user->email = $_POST['email'];
        $user->password = md5($_POST['password']);
        
        $user->register();

    }else if ($event == "login") {
        $user = new User();

        $user->email = $_POST['email'];
        $user->password = md5($_POST['password']);

        $user->login();
    }else if ($event == "logout") {
        session_start();

        session_unset();

        session_destroy();

        header('location:../index.php?logout=true');
    }
    else{
        echo "You are not allowed !";
    }
}
else{
    echo "You are not allowed !";
}
?>