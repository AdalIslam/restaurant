
<?php

	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		
		$validity=0;
		if(str_word_count($_REQUEST['name'])>=8){
			if(!preg_match('/[^a-zA-z\\s-\.]/',$_REQUEST['name'])){
				
			}else{
				echo "<br/>Invalid Characters in Name";
				$validity=1;
			}
		}else{
			echo "<br/>Must Have atleast 8 words in name";
			$validity=1;
		}
		
		if(empty($_REQUEST['email'])==false)
		{			
			if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) 
		  {
          
          }
		  else
		  {
			  echo "<br/>Invalid email format";
			  $validity=1;
		  }
		}
		else 
		{
			echo "<br/>email can not be empty";
			$validity=1;
		}
		
		if(empty($_REQUEST['username'])==false)
		{			
			if (!preg_match('/[^a-zA-z\\s-\.]/',$_REQUEST['username'])) 
		  {
          
          }
		  else
		  {
			  echo "Invalid format";
			  $validity=1;
		  }
		}
		else 
		{
			echo "<br/>can not be empty";
			$validity=1;
		}
		
		if(empty($_REQUEST['password'])==false)
		{			
			if (str_word_count($_REQUEST['password'])>=6) 
		  {
           
		   
          }
		  else{
				echo "<br/>";
				echo "pass Minimum 6 characters";
				$validity=1;
			}
		  
		}
		else 
		{
			echo "<br/>can not be empty";
			$validity=1;
		}
		if(empty($_REQUEST['confirmPassword'])==false)
		{			
			if (str_word_count($_REQUEST['confirmPassword'])>=6) 
		  {
           
		   
          }
		  else{
				echo "<br/>";
				echo "cpass Minimum 6 characters";
				$validity=1;
			}
		  
		}
		else 
		{
			echo "<br/>cpass can not be empty";
			$validity=1;
		}
		
		if(empty($_REQUEST['phonenumber'])==false)
		{			
			if (str_word_count($_REQUEST['phonenumber'])>=11) 
		  {
           
		   
          }
		  else{
				echo "<br/>";
				echo "phone Must be 11 characters";
				$validity=1;
			}
		  
		}
		else 
		{
			echo "<br/>phone can not be empty";
			$validity=1;
		}
		
		if(empty($_REQUEST['address'])==false)
		{			
			if (str_word_count($_REQUEST['address'])>=20) 
		  {
           
		   
          }
		  else{
				echo "<br/>";
				echo "address Minimum 20 characters";
				$validity=1;
			}
		  
		}
		else 
		{
			echo "<br/> address can not be empty";
			$validity=1;
		}
		
		if($_REQUEST['gender']=='male')
		{
			echo "MALE";
			echo "<br/>";
		}
		else if($_REQUEST['gender']=='female')
		{
			echo "FEMALE";
			echo "<br/>";
		}
       else if($_REQUEST['gender']=='other')
		{
			echo "Other";
			echo "<br/>";
		}
		else
		{	
			echo "No Gender Selected";
			$validity=1;
			
		}
		
		$x= $_REQUEST['day'];
		$x1= $_REQUEST['month'];
		$x2= $_REQUEST['year'];
		
		if($x1 <=12 && $x1>=1 && $x1 !=2 )
			{
				if($x <=31 && $x>=1)
				{
					if($x2 <=2017 && $x2>=1990)
					{
						echo $x;
						echo "-"."$x1";
						echo "-"."$x2";
						echo "<br/>";
					}
					else
					{
						echo "Invalid Date";
						$validity=1;
					}
				}
				else
				{
					echo "Invalid Date";
					$validity=1;
				}
			}
			else if($x1==2)
			{
				if($x>=1 && ($x<=28||$x<=29))
				{
					if($x2 <=2017 && $x2>=1990)
				{
					echo $x;
					echo "-"."$x1";
			
					echo "-"."$x2";
					echo "<br/>";
				}
					else
				{
					echo "Invalid Date";
					$validity=1;
				}
				}
					else
				{
					echo "Invalid Date";
					$validity=1;
				}
			}
			else
			{
				echo "Invalid Date";
				echo "<br/>";
				$validity=1;
			}
			
			{
		
	}


?>