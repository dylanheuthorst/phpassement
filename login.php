<?php

if (isset($_POST["username"])) {

    $username = $_POST["username"];
    $password = $_POST["pwd"];

    $server = "qn66usrj1lwdk1cc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user = "xavpqyym6459viap";
    $pwd = "eqvb6ev6yq5rogs3";
    $database = "nocjh6h9cdq7i00a";

    $connection = new mysqli($server, $user, $pwd, $database);
    if ($connection->connect_error){
        echo $connection->connect_error;
    } else{
        echo "Connection Created";
    }
}
/*http://herokugitphpleisong.herokuapp.com/phpMyAdminDylan/
