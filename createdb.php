<?php

    $con = mysqli_connect("qn66usrj1lwdk1cc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "xavpqyym6459viap", "eqvb6ev6yq5rogs3", "nocjh6h9cdq7i00a");

    if (!$con){
        echo "Not Connected";
    }

    if (!mysqli_select_db($con,"nocjh6h9cdq7i00a")){
        echo "Not connected To Server";
    }

    $createname = $_POST["createname"];
    $createusername = $_POST["createusername"];
    $createemail = $_POST["createemail"];
    $createpwd = $_POST["createpwd"];

    $sql = "INSERT INTO logins (Name, Username,Email,Password) VALUES ('$createname','$createusername','$createemail', '$createpwd')";

    if (!mysqli_query($con,$sql)){
        echo "Not Inserted";
    } else{
        echo "Inserted";
    }
    