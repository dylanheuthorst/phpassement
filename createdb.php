<?php
    $host = "qn66usrj1lwdk1cc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user = "xavpqyym6459viap";
    $password = "eqvb6ev6yq5rogs3";
    $database = "nocjh6h9cdq7i00a";

    $con = new mysqli($host,$user,$password,$database );

    $createusername = $_POST["createusername"];
    $createpwd = $_POST["createpwd"];

    $sql = "INSERT INTO logins (ClientID,Username,Password) VALUES (0,'$createusername','$createpwd')";

    if (!mysqli_query($con,$sql)){
        echo "Somethings Gone Wrong";
    }
    else{
        echo "Account Created";
    }

    header("refresh:1.5; url=index.php");