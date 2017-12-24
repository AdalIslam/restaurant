<?php
    $host="127.0.0.1";
    $userserver="root";
    $pass="";
    $dbname="restaurant";
    $port=3306;
   
    function executeSQL($sql){
        global $host, $userserver, $pass, $dbname, $port;
        
        $link=mysqli_connect($host, $userserver, $pass, $dbname, $port);
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
       return $result;
    }
?>