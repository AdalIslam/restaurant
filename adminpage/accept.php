<?php include "../service/user_service.php"; ?>

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
                    document.location='userlist.php';
                 </script>";
		if(removeRegistered($userId)==true){
            echo "<script>
                    alert('Record Deleted');
                    document.location='retrieve.php';
                 </script>";
            die();
        }
	}
?>
