<?php include "../service/burger_service.php"; ?>
<?php
    $burgerId =$_GET['id'];
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(removeBurger($burgerId)==true){
            echo "<script>
                  //  alert('Record Deleted');
                    document.location='Burger.php';
                 </script>";
            die();
        }
    }
    $burger = getBurgerById($burgerId);
?>
<center>
<fieldset>
<form method="post">

    <legend>ARE YOU SURE TO DELET THIS ?</legend>
    <table border="0" cellspacing="0" cellpadding="3">
	  <tr>
	    <td> <img height="150" src="<?= $burger['img'] ?>"></br>
	  <tr>
        <tr>
            <td>ID:</td>
            <td><?= $burger['id'] ?></td>
         </tr>
        <tr>
            <td>NAME:</td>
            <td><?= $burger['name'] ?></td>
        </tr>
        <tr>
            <td>PRICE:</td>
            <td><?= $burger['price'] ?></td>
        </tr> 
		<hr/>
        
		
		
    </table>
	<input type="submit" value="DELETE" />
	</form>

</fieldset>
<center>