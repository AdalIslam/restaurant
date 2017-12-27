<?php
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		$validity=0;
		if(str_word_count($_REQUEST['name'])>=8){
			if(!preg_match('/[^a-zA-z\\s-\.]/',$_REQUEST['name'])){
				
			}else{
				echo "Invalid Characters in name";
				$validity=1;
			}
		}else{
			echo "Must Have atleast 8 words in name";
			$validity=1;
		}
		
		if(empty($_REQUEST['price'])==false)
		{			
			if (str_word_count($_REQUEST['price'])>=6) 
		  {
           
		   
          }
		  else{
				echo "<br/>";
				echo "Minimum 6 characters";
				$validity=1;
			}
		  
		}
		else 
		{
			echo "<br/>can not be empty";
			$validity=1;
		}
		
?>