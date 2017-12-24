<?php
$x=$_POST['Usertype'];
if(empty($x))
	echo "please select usertype";
else if($x="Admin")
{  echo "<a href='admin/adminindex.html'></a>";
   echo "bujjhlaman natcasesort ";
}
else if($x="User")
	echo "<a href='user/UserIndex.html'></a>";
	
?>
