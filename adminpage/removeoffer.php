<?php include "../service/offer_service.php"; ?>
<?php
   
   $offerId=$_GET['id'];
   var_dump($offerId);
   
  
   if($_SERVER['REQUEST_METHOD']=="POST"){
	  
         $offer['offerId']=$offerId;
        $offer['offerval']=$_POST['offerval'];
        $offer['starts']=$_POST['starts'];
		$offer['ends']=$_POST['ends'];
		$offer['details']=$_POST['details'];
		var_dump($offer);
        
        if(removeOffer($offerId)==true){
            echo "<script>
                    alert('Offer Removed');
                    document.location='OfferAdmin.php';
                 </script>";
            die();
        }
    }
	
	$offer = getOfferById($offerId);



?>
<html>

     
	 
	    <form method="post" >
		   <fieldset><legend>Are you sure to remove ?</legend>
			offer Id: <?=$offer['offerId'];?></br> <hr></hr>
			offer:<input name="offerval" type="text" value="<?=$offer['offerval'];?>"/>
			<hr></hr>
			starts:<input name="starts"type="text"  value="<?=$offer['starts'];?>"/>
			<hr></hr>
			ends:<input name="ends"type="text" value="<?=$offer['ends'];?>"/>
			<hr></hr>
			details:<input name="details"type="text" value="<?=$offer['details'];?>"/>
			<hr></hr>
			<button>Remove</button>
			</fieldset>
		</form>
		
	
</html>