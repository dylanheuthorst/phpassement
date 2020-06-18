<?php

$username = $_POST['username'];
$password = $_POST['password'];

$host = "qn66usrj1lwdk1cc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "xavpqyym6459viap";
$password = "eqvb6ev6yq5rogs3";
$database = "nocjh6h9cdq7i00a";

$con = new mysqli($host,$user,$password,$database );

$query = "SELECT * from login where username='$username'";

$result = $con->query($sql);

if ($result->num_rows == 1){
    while ($row = $result->fetch_assoc()) {
        if ($row["password"] == $password) {
            echo "Login Successful";
        } else {
            echo "Login Failed";
        }
    }
}
header("refresh:1.5; url=index.php");





/*http://herokugitphpleisong.herokuapp.com/phpMyAdminDylan/
