<?php
$username = $_POST["username"];
$password = $_POST["password"];

$host = "qn66usrj1lwdk1cc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "xavpqyym6459viap";
$password = "eqvb6ev6yq5rogs3";
$database = "nocjh6h9cdq7i00a";

$con = new mysqli($host,$user,$password,$database );

$sql = " select * from logins where Username = '".$username."'AND Password = '".$password."'
            limit 1";
$result = mysqli_query($sql);
if (mysql_num_rows($result)==1){
    echo "You Have successfully logged in!";
}else{
    echo "You have entered an incorrect username or password";
}



/*http://herokugitphpleisong.herokuapp.com/phpMyAdminDylan/
