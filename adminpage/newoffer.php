 <?php include "../service/offer_service.php"; ?>
 <?php
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
       
		$offer['offerval']=$_POST['offerval'];
		$offer['starts']=$_POST['starts'];
		$offer['ends']=$_POST['ends'];
		$offer['details']=$_POST['details'];
		var_dump($offer);
		if(addOffer($offer)==true)
		{
		//	echo "offer added";
		 echo "<script>
                    alert('offer added');
                    document.location='OfferAdmin.php';
                 </script>";
            die();
		}
       
    } 
?>
<html>
 <fieldset align="middle"><legend>Add New Offer:</legend>
<form method="post"align="center">
 <table border="0" align="center">
   
      <tr>
	  <td>offer value: </td>
	  <td><input name="offerval"/></td>
	  <td></td>
	  
	 </tr>
	<tr> 
	  <td>starts</td>
	  <td><input name="starts" required /></td>
	   <td><abbr style="color:red"> formet : year-month-date</abbr></td>
    </tr>
	<tr>
	  <td>ends </td>
	  <td><input name="ends" required/></td> 
	   <td><abbr style="color:red"> formet : year-month-date</abbr></td>
	</tr>
	<tr>
	  <td>details</td>
	  <td><input name="details"/></td>
	  <td></td>
   </tr>
   <tr>
     <td><button>Submit</button> </td>
	 </tr>
  
  
  

  </table>
</form>
  </fieldset>
</html>