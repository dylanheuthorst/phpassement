<?php

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

    $createname = $_POST["createname"];
    $createusername = $_POST["createusername"];
    $createemail = $_POST["createemail"];
    $createpwd = $_POST["createpwd"];

    $newUser = new User(0,$createname,$createusername,$createemail,$createpwd);
    $newUser->save();