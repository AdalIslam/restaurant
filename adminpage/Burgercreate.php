 <?php include "../service/burger_service.php"; ?>
 <?php
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
       $src=$_FILES['uploaded_file']['tmp_name'];
	    $dest = $_FILES['uploaded_file']['name'];
	
	    //var_dump($dest);
	    move_uploaded_file($src, $dest);
		//$burger['id']=$_POST['burgerval'];
		$burger['name']=$_POST['name'];
		$burger['price']=$_POST['price'];
		$burger['img']=$dest;
	//	var_dump($burger);
		if(addBurger($burger)==true)
		{
		//	echo "burger added";
		 echo "<script>
                    alert('burger added');
                    document.location='Burger.php';
                 </script>";
            die();
		}
       
    } 
?>
<center>

<fieldset>
    <legend>ADD NEW OFFER:</legend>
    <form method="post" enctype="multipart/form-data">        
        <table border="0" cellspacing="0" cellpadding="3">
		    <tr>
				<td> </br>
				<input type="file" name="uploaded_file"></button>
				</td>
				
			 <tr>
            <tr>

            </tr>
            <tr>
                <td>NAME:</td>
                <td>
                    <input name="name" />
                </td>
            </tr>
            <tr>
                <td>PRICE:</td>
                <td>
                    <input name="price"  />
                </td>
            </tr> 
        </table>
        <hr/>
        <input type="submit" value="SAVE" />
    </form>
</fieldset>
<center>