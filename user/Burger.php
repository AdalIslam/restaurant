 <?php include "../service/burger_service.php"; ?>
<?php
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $searchKey = $_POST['search'];
        $burgers = getBurgersByName($searchKey);
       
    } else {
        $burgers = getAllBurgers();
    }
?>
<html>
<head>
  
</head>
<form method="post" align="centre">
  <center>
  <table border="0" cellspacing="0" cellpadding="5" align="middle" >
      <center>
	
	    
        <input name="search"/>
        <input type="submit" value="SEARCH"/> 
		</center>
        <?php if (count($burgers) == 0) { ?>
            <tr><td>NO RECORD FOUND</td></tr>
        <?php } ?>

        <?php foreach ($burgers as $burger) { ?>
            <tr>
			    <td> <img height="150" src="../pictures/<?= $burger['img'] ?>"></br>
                &nbsp;&nbsp;&nbsp;<b style="color:blue"><?= $burger['name'] ?></b></br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:red"><?= $burger['price'] ?></b></br>
                <td><a href="SelectBurger.php"?</a>Select</td>
            </tr>
        <?php } ?>
    </table>
	<center>
 
</form>
</html>