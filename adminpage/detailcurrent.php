<?php include "../service/user_service.php"; ?>
<?php
    
	 $userdId=$_GET['id'];
     $user = getUserById($userdId);
?>
<html>

       <fieldset>
	   <legend>DETAIL</legend>
	  <table align="center">
	   
       <tr>
	   
	   
	     <td>
		   <table border="0" cellspacing="0" cellpadding="3">
					<tr>
						<td>ID:</td>
						<td><?= $user['id'] ?></td>
					</tr>
					<tr>
						<td>NAME:</td>
						<td><?= $user['name'] ?></td>
					</tr>
					<tr>
						<td>EMAIL:</td>
						<td><?= $user['email'] ?></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><?= $user['address'] ?></td>
					</tr> 
					<tr>
						<td>PhoneNumber:</td>
						<td><?= $user['phonenumber'] ?></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><?= $user['gender'] ?></td>
					</tr>
				</table>
					 
			   <a href="block.php?id=<?= $user['id'] ?>">&nbsp;&nbsp;block</a>
			   <a href="unblock.php?id=<?= $user['id'] ?>">&nbsp;&nbsp;unblock</a>
			   <a href="delet.php?id=<?= $user['id'] ?>">&nbsp;&nbsp;delet</a>
                
		  
		</td>
		
		 </fieldset>
		</tr>
		</table>
		
	
</html>