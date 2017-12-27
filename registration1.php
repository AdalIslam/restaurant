<?php include "service/user_service.php"; ?>
<?php include "service/validation_reg.php"; ?>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
	    $user['name']=$_POST['name'];
        $user['email']=$_POST['email'];
		$user['username']=$_POST['username'];
		$user['password']=$_POST['password'];
		$user['address']=$_POST['address'];
		$user['phonenumber']=$_POST['phonenumber'];
		$user['gender']=$_POST['gender'];
		//var_dump($_POST);
	    echo "rukaia";
		var_dump($user);
		
        
       if(addRegistered($user)==true){
            echo "<script>
                    alert('Record Added');
                    document.location='Index.html';
                 </script>";
        }
    }
?>
<html>

<head>
   <script src="Resources\js\dist\jquery.js"></script>
   <script src="Resources\js\jquery-1.11.2.min.js"></script>
   <script src="Resources\js\dist\jquery.validate.js"></script>
   <script src="Resources\js\dist\jquery.validate.min.js"></script >
   <script src="Resources\js\Simple-Lightweight-jQuery-Input-Mask-Plugin-Masked-input\dist\jquery.masked-input.min.js"></script >
   <script type="text/javascript">
	
		  
   </script> 
   <style type="text/css">
      /*if(!getElementById("gender"))
	     innerHTML("please select a gender"); */
		 if($('gender').val() == "") 
       alert('Select');
		 
 </style>   
 
</head>
<body>
<fieldset>
    <legend><b>REGISTRATION</b></legend>
    <form method="post" action="" id="registration">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="130"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input id="name" name="name" type="text">
				<label for="name" class="error" style="display:none;color:red"></label> </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" id="email" type="text">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
					<label for="email" class="error" style="display:none;color:red"></label>
                </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><input name="username" id="username" type="text">
				<label for="username" class="error" style="display:none;color:red"></label></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="password" id="password" type="password">
				<label for="password" class="error" style="display:none;color:red"></label></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Confirm Password</td>
                <td>:</td>
                <td><input name="confirmPassword" id="confirmPassword" type="password">
				<label for="confirmPassword" class="error" style="display:none;color:red"></label></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr/></td></tr>			
             <tr>
                <td>Phone Number</td>
                <td>:</td>
                <td><input name="phonenumber" id="phonenumber" data-masked-input="99999999999" minlength="11" maxlength="11">
                <label for="phonenumber" class="error" style="display:none;color:red"></label></td>
				<td></td>
				
            </tr>	
			<tr><td colspan="4"><hr/></td></tr>
             <tr>
                <td>Address</td>
                <td>:</td>
                <td><input name="address" id="address" type="address">
				<label for="address" class="error" style="display:none;color:red"></label></td>
                <td></td>
            </tr>				
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>   
                    <input name="gender" id="gender" type="radio" value="male">Male
                    <input name="gender" id="gender" type="radio" value="female">Female
                    <input name="gender" id="gender" type="radio" value="other">Other
					<label for="gender" class="error" style="display:none;color:red"></label>

                </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td valign="top">Date of Birth</td>
                <td valign="top">:</td>
                <td>
                    <input name="day"/> /										
																	
								<input name="month"/> /										
																	
								<input name="year"/>									
								<i>(dd/mm/yyyy) </i>
					<label for="dob" class="error" style="display:none;color:red"></label>
                </td>
                <td></td>
            </tr>
        </table>
        <hr/>
        <input type="submit" value="Submit">
        <input type="reset">
    </form>
	</fieldset>
   </body>
  
	<script>
	/*		
		
   $("#registration").validate(
        {  
		    
		     rules:{
			  name:{
			  required:true,
			  //min value:5
			  },
			  username:{
			  required:true
			  //min value:5
			  },
			  address:{
			  required:true,
			  minlength:5
			  },
			  phonenumber: {
              required: true,
              //phoneBangladesh:true
			  //if($("#phonenumber").masked-input('99999999999'))
					
			  },
			  gender:{
			  required:true
			 
			  },
			  email: {
			  required:true,
			  email:true
			  },
			  password: {
			  required:true,
			  minlength: 5
			  //password:true
			  },
			  confirmPassword: {
			  required:true,
			  minlength: 5,
			  equalTo:"#password"
			  },
			  blood:{
			 // required:true
			  }
			  },
			  
			  message:
			    {
				  name:{
				  required:"please enter email",
				 // name:"please enter atleast two charecter "
					},
				  phonenumber:{
				   required:"please enter phonenumber",
				   phoneBangladesh:"please enter a valid number  "
					},
				  email:{
				  required:"please enter email",
				  email:"please enter a vlaid email address"
					},
					gender:{
				    required:" choose one "

					},
				  password:{
					  required:"please enter password",
					  minlength:"should be atleast 5 charecters"
					  
					},
					username:{
					required:"enter your user name",
				  //min value:5
					},
				  address:{
				  required:"enter your address",
				  //min value:"ivalid address"
				   },
				  
				 confirmPassword:{
					 required:"Confirm passwprd",
					 minlength:"should be atleast 5 charecters",
					 equalTo:"should be equal To password"
					  
					}
			    }
				
              
		}
		
		
    ); */

	
	 </script>
	

 </html>