<?php include "../service/offer_service.php"; ?>
<?php
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $searchKey = $_POST['search'];
        $offers = getOffersByName($searchKey);
       
    } else {
        $offers = getAllOffers();
    }
?>
<html>
<head>
  
</head>
<form align="center" method="post">


 <b style="color:green"> CURRENT OFFRES : </b></br></br></br>
   
  <table border="1" align="center">
   <tr><input name="search"/>
        <input type="submit" value="SEARCH"/></br>
		<b style="color:red">Search By 'Offer percent'</b></br></tr>
    <tr>
	  <td>Offfer Id</td>
	  <td>Offfer Percent:</td>
	  <td>Starts</td>
	    <td>Ends</td>
	  <td>Details</td>
	  <td><a href="Menu.php">Let's Eat</a></td>
	  
	</tr>
	 <?php if (count($offers) == 0) { ?>
            <tr ><td colspan="7">NO RECORD FOUND</td></tr>
        <?php } ?>

        <?php foreach ($offers as $offer) { ?>
            <tr>
			    <td><?= $offer['offerId'] ?></td>
                <td><?= $offer['offerval'] ?></td>
				<td><?= $offer['starts'] ?></td>
				<td><?= $offer['ends'] ?></td>
				<td><?= $offer['details'] ?></td>
                <td><a href="Menu.php?id=<?= $offer['offerId'] ?>">Let's Eat</a></td>
                
            </tr>
        <?php } ?>
	
  </table ></br></br>
  
 
</form>
</html>
