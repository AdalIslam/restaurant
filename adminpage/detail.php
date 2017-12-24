<?php include "../service/user_service.php"; ?>
<?php
    $registeredId =$_GET['id'];
    $registered = getRegisteredById($registeredId);
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
						<td><?= $registered['id'] ?></td>
					</tr>
					<tr>
						<td>NAME:</td>
						<td><?= $registered['name'] ?></td>
					</tr>
					<tr>
						<td>EMAIL:</td>
						<td><?= $registered['email'] ?></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><?= $registered['address'] ?></td>
					</tr> 
					<tr>
						<td>PhoneNumber:</td>
						<td><?= $registered['phonenumber'] ?></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><?= $registered['gender'] ?></td>
					</tr>
				</table>
					 
			   <a href="accept.php?id=<?= $registered['id'] ?>">&nbsp;&nbsp;Accept</a>
                <a href="reject.php?id=<?= $registered['id'] ?>">Reject</a>
		  
		</td>
		
		 </fieldset>
		</tr>
		</table>
		
	
</html>