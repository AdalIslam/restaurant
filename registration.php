
<?php
  
  echo "<br><br><hr>";
  var_dump($_POST);
   $msg="";
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['phonenumber'])&& isset($_POST['password'])&& isset($_POST['confirmpassword']) && isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['dob']) ){
		$name = $_POST['name'];
		$email= $_POST['email'];
		$username= $_POST['username'];
		$phonenumber = $_POST['phonenumber'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		if(empty($name) || empty($email) || empty($username) || empty($phonenumber)|| empty($password)|| empty($confirmpassword)|| empty($address)|| empty($gender) || empty($dob)  ){
			$msg+= "Fill all the fields\n.";
			require "Registration.html";
			
		}
		else{
			$f = true;
			$at = 0;
            $cnt = 0;
             
 
            for($i = 0; $i < strlen($email); $i++){
                if($email[$i] == '@'){
                     $cnt++;
                     $at = $i;
                 }
             }
			 if($cnt != 1){
                $f = false;
				$msg +="wrong email formet";
            }
			if($confirmpassword != $password)
			{
				$f=false;
				$msg+="give same password for both of the password firlds";
			}
			
		}
	}
	echo $msg;
		
?>
