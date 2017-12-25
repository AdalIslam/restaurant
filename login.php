<?php include "service/user_service.php"; ?>
<?php


   if ($_SERVER['REQUEST_METHOD'] == "POST")
	{ 
		if(loggin_time(4)==true)
			echo "login time added";
	}
?>
<html>
<fieldset>
    <legend><b>LOGIN</b></legend>
    <form method="post" id="loginform" action="" target="">
        <br/>
        <table>
		   
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password"></td>
            </tr>
        </table>
        <hr />
        <input name="remember" type="checkbox">Remember Me
        <br/><br/>
        <input type="submit" value="Submit">
        <a href="forgot_password.html">Forgot Password?</a>
    </form>
</fieldset>

</html>