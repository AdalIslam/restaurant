<?php include "../service/user_service.php"; ?>
<?php include "../service/admin_service.php";?>
<?php
   
   
   $c=0;
   $k="_parent";
   if ($_SERVER['REQUEST_METHOD'] == "POST")
	{ 
       // var_dump($_POST);
        $x=$_POST['usertype'];
		$userId=$_POST['userid'];
		//var_dump($userId);
        $password=$_POST['password'];
		$users=getAllUsers();
		$admins=getAllAdmins();
		
		
		if(empty($x))
		   echo "select usertype please";
		else
		 {
			 if($x=="admin")
				
			{
				foreach ($admins as $admin)
        			{   // here , i use userId as user name bt for user used userid for id 
							if(($admin['adminId']==$userId)&& ($admin['password']==$password )) 
								{  // echo "thikase";
							        Session_start();
							       $_SESSION['CurrentUserId']=$admin['id'];
							        $c=1;
									//<a href="editoffer.php?id=<?= $offer['offerId'] ?">username</a>
									
         					   	    echo "<script>
									document.location='adminindex.php';
									//document.location='new 1.php';
									 </script>";
								} 
							
			       }
				
				
			   }
			else if($x=="user")
			{
				
		      foreach ($users as $user)
        			{  
							if((($user["id"]==$userId )&& ($user["password"]==$password )) &&($user["mode"]!="blocked" ) )
								{  
									 Session_start();
									$_SESSION['CurrentUserId']=$user['id'];
									$c=1;
									 echo "<script>
									alert('login successfull');
									//document.location='user/UserIndex.html';
									 </script>";
								} 
							
			       }
				   
                    
		    }
			if($c==0)
				{  
					$k="";
					 echo "<script>
				 alert('login failed');
				 document.location='registration1.php';
				 </script>";
				  
				}
     /*	
     // Session_start();
									$_SESSION['CurrentUser']=$admin['name'];
							        var_dump($_SESSION);	 
	 */
		//if(loggin_time(4)==true)
		//	echo "login time added";
	}
	var_dump($_SESSION);
}
?>
<html>
<fieldset>
    <legend><b>LOGIN</b></legend>
    <form method="post" id="loginform" action="" target="<?=$k?>">
        <br/>
        <table
		    <tr> select UserType:
			 <select name="usertype"  >
				   <option value=0  />
				  <option value="admin"  />Admin 
				  <option value="user" />User
			</tr>
		   
            <tr>
                <td>User ID</td>
                <td>:</td>
                <td><input name="userid" type="text" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="password" type="password" required></td>
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