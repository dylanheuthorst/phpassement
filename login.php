<?php
if (isset($_POST["username"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $host = "qn66usrj1lwdk1cc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user = "xavpqyym6459viap";
    $password = "eqvb6ev6yq5rogs3";
    $database = "nocjh6h9cdq7i00a";

    $con = new mysqli($host,$user,$password,$database );

    if ($con->connect_error){
        echo $con->connect_error;
    } else{
        echo "Connection Created";
    }

//I will use my login function here
    if (login($username,$password)){ // if true (login success)
        session_start();
        $_SESSION["username"] = $username;

    }else{ //login fail
        echo "Wrong username or password";
    }
}

/*http://herokugitphpleisong.herokuapp.com/phpMyAdminDylan/
