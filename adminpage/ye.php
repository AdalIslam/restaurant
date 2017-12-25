<?php require "../Resources/PHPMailer-master/PHPMailerAutoload.php";
$mail=new PHPMailer();
$mail->IsSmtp();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->IsHTML(false);
$mail->Username="ayeshajahanara@gmail.com";
$mail->Passwor="kuasha03";
$mail->SetFrom("ayeshajahanara@gmail.com");
$mail->Subject="html";
$mail->Body="hi there";
$mail->AddAddress("rabeyaafsana@gmail.com");

if(!$mail->Send())
	echo "not send";
else
	echo "sent";
?>