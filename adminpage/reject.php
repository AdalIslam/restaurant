<?php include "../service/user_service.php"; ?>

<?php
   
    $registeredId=$_GET['id'];
	//echo $registeredId;
	//var_dump($GLOBALS);
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(removeRegistered($registeredId)==true){
            echo "<script>
                    alert('Record Deleted');
                    document.location='userlist.php';
                 </script>";
            die();
        }
    }
    $registered = getRegisteredById($registeredId);
?>
<fieldset align="">
    <legend>ARE YOU SURE?</legend>
    <form method="post" >        
        <table  border="0" cellspacing="0" cellpadding="3">
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
        
        <input type="submit" value="DELETE" />
    </form>
</fieldset>