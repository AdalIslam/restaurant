<?php include "../service/user_service.php"; ?>
<?php 
 require "../Resources/PHPMailer-master/PHPMailerAutoload.php";
 $mailto='rabeyaafsana@gmail.com';
$mailSub='html';
$mailMsg= 'nice toh';
 $mail = new PHPMailer();
 $mail->isSMTP();
 $mail->SMTPDebug=1;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='ssl';
 $mail->Host='smtp.gmail.com';
 $mail->Port=465;
 $mail->IsHTML(false);
 $mail->Username='ayshajahanara@gmail.com';
 $mail->Password='kuasha';
 $mail->setFrom('ayshajahanara@gmail.com');
 $mail->addAddress($mailto);
 $mail->Subject = $mailSub;
 $mail->Body=$mailMsg;
 if(!$mail->Send())
 {
  echo "mail not sent";
 }
  else
	 echo "mail sent";
 
?>

<?php 

    $userId=$_GET['id'];
	$user=getRegisteredById($userId);
	var_dump($user);
    /*if($_SERVER['REQUEST_METHOD']=="POST"){
        if(addUser($user)==true){
            echo "<script>
                    alert('Record Added');
                    document.location='userlist.php';
                 </script>";
        }
    }*/
	if(addUser($user)==true)
	{
		echo "<script>
                    alert('Record Added');
                    //document.location='userlist.php';
                 </script>";
		if(userSince($userId)==true){
			echo "since";
            echo "<script>
                    alert('usersince added');
                    //document.location='retrieve.php';
                 </script>";
            
        }
		if(removeRegistered($userId)==true){
            echo "<script>
                    alert('Record Deleted');
					document.location='userlist.php';
                    //document.location='retrieve.php';
                 </script>";
            die();
        }
		
	}
?>
