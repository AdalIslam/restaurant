<?php include "../service/user_service.php"; ?>

<?php
   
    $userId=$_GET['id'];
	//echo $userId;
	//var_dump($GLOBALS);
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(unblockUser($userId)==true){
            echo "<script>
                    alert('Record blocked');
                    document.location='userlist.php';
                 </script>";
            die();
        }
    }
    $user = getUserById($userId);
?>
<fieldset align="">
    <legend>ARE YOU SURE?</legend>
    <form method="post" >        
        <table  border="0" cellspacing="0" cellpadding="3">
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
        
        <input type="submit" value="Unblock" />
    </form>
</fieldset>