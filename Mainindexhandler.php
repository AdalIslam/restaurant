<?php
$x=$_POST['Usertype'];
if(empty($x))
	echo "please select usertype";
else if($x="Admin")
	echo "<html><a href="admin/adminindex.html"></html>";
else if($x="User")
	echo "<html><a href="user/UserIndex.html"></html>";
	
?>
