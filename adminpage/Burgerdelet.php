<?php include "../service/burger_service.php"; ?>
<?php
    $burgerId =$_GET['id'];
    $burger = removeBurger($burgerId);
?>
<center>
<fieldset>

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
	<input type="submit" value="SAVE" />
</fieldset>
<center>