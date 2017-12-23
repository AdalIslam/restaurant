<?php
    $con = mysqli_connect("localhost","root","","test");
    
    if(!$con){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Connected Successfully";

    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $sqli = "insert into lab values ('".$name."','".$email."','".$username."','".$password."')";
    $result = mysqli_query($con,$sqli)or die (mysqli_error($con));

    if($result){
        echo "data inserted";
    }
    else
        echo "no inserted";
?>