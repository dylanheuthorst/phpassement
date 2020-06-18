<?php

$username = $_POST['username'];
$password = $_POST['password'];

$host = "qn66usrj1lwdk1cc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "xavpqyym6459viap";
$password = "eqvb6ev6yq5rogs3";
$database = "nocjh6h9cdq7i00a";

$con = new mysqli($host,$user,$password,$database );

$query = "SELECT username, password from login where username=? AND password=? LIMIT 1";

$stmt = $con->prepare($query);
$stmt->bind_param("ss",$username, $password);
$stmt->execute();
$stmt->bind_result($username,$password);
$stmt->store_result();

if ($stmt->fetch()){
    echo "Login Successful";
}else{
    echo "Login Failed";
}
header("refresh:1.5; url=index.php");





/*http://herokugitphpleisong.herokuapp.com/phpMyAdminDylan/
