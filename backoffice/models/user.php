<?php
require_once "../configdb/db_connector.php";

class User{

    public $fullname ;
    public $email ;
    public $role ;
    public $password ;

    function register(){
        $base = connect_to_db();

        $requette = "INSERT INTO users VALUES (null,'$this->fullname','$this->email','client','$this->password')";
    
        $insertedRow = $base->exec($requette);

        if ($insertedRow == 1) {
            header('location:../views/user/home.php?register=true');
        }else{
            echo "SQL Error !";
        }
    }
    function login(){
        $base = connect_to_db();

        $requette = "SELECT * from users where email='$this->email' and password='$this->password'";

        $data = $base->query($requette);

        if ($data->rowCount()==1) {
            session_start();
            $user = $data->fetchObject();
            $_SESSION['email'] = $user->email;

            header('location:../views/user/profile.php?');
        }else {
            header('location:../views/user/home.php?error=true');
        }
        
    }
   
    
}
