<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        $_SESSION["uname"]= $_POST["uname"];
        $_SESSION["upass"]= $_POST["upass"];
        $username = $_POST["uname"];
        $password = $_POST["upass"];
        // Connect to the database
            $con=mysqli_connect("localhost","root","");
            // Make sure we connected successfully
            if(! $con)
            {
                die('Connection Failed'.mysql_error());
            }

            // Select the database to use
            mysqli_select_db($con,'restaurant');

            $result = mysqli_query($con,"SELECT * FROM customerlogin where cuUserName='".$username."' and cuPassword='".$password."';") or die("Failed to Login".mysql_error());

            $row = mysqli_fetch_array($result);

            if($row["cuUserName"]==$username && $row["cuPassword"]==$password)
            {
                header("Location:user/UserIndex.html");
            }

            else
            {

                $result = mysqli_query($con,"SELECT * FROM restaurantlogin where phUserName='".$username."' and phPassword='".$password."';") or die("Failed to Login".mysql_error());
                $row = mysqli_fetch_array($result);
                if($row["phUserName"]==$username && $row["phPassword"]==$password)
                {
                      header("Location:restauranthome.html");  
                }
                else
                {
                   $result = mysqli_query($con,"SELECT * FROM admin where aUserName='".$username."' and aPassword='".$password."';") or die("Failed to Login".mysql_error());
                    $row = mysqli_fetch_array($result);
                    if($row["aUserName"]==$username && $row["aPassword"]==$password)
                    {
                          header("Location:adminhome.html");  
                    }
                    else
                    {
                        $result = mysqli_query($con,"SELECT * FROM delivery where deName='".$username."' and dePass='".$password."';") or die("Failed to Login".mysql_error());
                        $row = mysqli_fetch_array($result);
                        if($row["deName"]==$username && $row["dePass"]==$password)
                        {
                            header("Location:deliveryhome.html");  
                        }
                         //header("Location:index.html");
                        $message = "Incorrect username or password! Or no such account exists!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }     
                }
            }
    }
?>