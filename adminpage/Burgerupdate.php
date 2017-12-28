<?php include "../service/burger_service.php"; ?>
<?php
    
    $burgerId = $_REQUEST['id'];
    if($_SERVER['REQUEST_METHOD']=="POST"){
		$src=$_FILES['uploaded_file']['tmp_name'];
	    $dest = $_FILES['uploaded_file']['name'];
	
	    //var_dump($dest);
	    move_uploaded_file($src, $dest);
        $burger['id']=$burgerId;
        $burger['name']=$_POST['name'];
        $burger['price']=$_POST['price'];
		$burger['img']=$dest;
		
        
        if(editBurger($burger)==true){
            echo "<script>

                    document.location='Burger.php';
                 </script>";
            die();
        } 
    }
    $burger = getBurgerById($burgerId);
?>

<center>

<fieldset>
    <legend>UPDATE</legend>
    <form method="post" enctype="multipart/form-data">        
        <table border="0" cellspacing="0" cellpadding="3">
		    <tr>
				<td> <img height="150" src="<?= $burger['img'] ?>"></br>
				<input type="file" name="uploaded_file"></button>
				
			 <tr>
            <tr>
                <td>ID:</td>
                <td>
                    <?= $burger['id'] ?>
                </td>
            </tr>
            <tr>
                <td>NAME:</td>
                <td>
                    <input name="name" value="<?= $burger['name'] ?>" />
                </td>
            </tr>
            <tr>
                <td>PRICE:</td>
                <td>
                    <input name="price" value="<?= $burger['price'] ?>" />
                </td>
            </tr> 
        </table>
        <hr/>
        <input type="submit" value="SAVE" />
    </form>
</fieldset>
<center>