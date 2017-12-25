<?php include "../service/user_service.php"; ?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $searchKey1 = $_POST['searchwaitingusers'];
		
		 $searchKey2 = $_POST['searchcurrentusers'];
		 echo $searchKey1;
        $registereds = getRegisteredsByName($searchKey1);
		$users=getUsersByName($searchKey2);
    } else {
        $registereds = getAllRegistereds();
		$users=getAllUsers();
    }
?>
<html>
 <form align="center" method="post">
  <b Style="color:red">WAITING USERS:</b></br></br>
	 <input name="searchwaitingusers" id="searchwaitingusers"/>
     <button> search </button></br> </br> 
   <table   border="1" align="center">
         
		 <?php if (count($registereds) == 0) { ?>
            <tr><td>NO RECORD FOUND</td></tr>
        <?php } ?>
   
		  
		  
		   <?php foreach ($registereds as $registered) { ?>
            <tr>
                <td><?= $registered['name'] ?></td>
                <td><a href="detail.php? id=<?= $registered['id'] ?>">Details</a></td>
                <td><a href="accept.php?id=<?= $registered['id'] ?>">Accept</a></td>
                <td><a href="reject.php?id=<?= $registered['id'] ?>">Reject</a></td>
            </tr>
         <?php } ?>
    </table> </br> </br>
 
   
     <b Style="color:green">CURRENT USERS:</b></br></br>
        <input  name="searchcurrentusers" id="searchcurrentusers"/>
        <button> search </button></br></br>
        <table border="1" align="center">
   
		  <tr border=" 1">
			<td border="1">Name</td>
			<td>Status</td>
			<td>User since</td>
			<td>Mode</td>
			<td colspan="3">option</td>
		  </tr>
		   
		   
		 <?php if (count($users) == 0) { ?>
            <tr><td>NO RECORD FOUND</td></tr>
        <?php } ?>
   
		  
		  
		   <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user['name'] ?></td>
				<td><?php
				 if($user['login']!=""){
					
				        $lastlogin=explode("-",$user['login']);
				        $d=$lastlogin[0];
						$m=$lastlogin[1];
						$y=$lastlogin[2];
						
						$datetoday=explode("-",date('d-m-Y'));
				        $dt=$datetoday[0];
						$mt=$datetoday[1];
						$yt=$datetoday[2];
						if($m==$mt && $y==$yt && abs($d-$dt) <=7)
							echo "<html><b style='color:green'>active</b></html>" ;
						else if(abs($yt-$y)>=1)
							echo "<html><b style='color:red'>absent</b></html>" ;
				}
				else
					echo "empty";
				
				    ?>	
				</td>
				
				<td><?= $user['since'] ?></td>
				 <td><?= $user['mode'] ?></td>
                <td><a href="unblock.php? id=<?= $user['id'] ?>">unblock</a> &nbsp;
                <a href="detailcurrent.php? id=<?= $user['id'] ?>">details</a>&nbsp;
                <a href="block.php?id=<?= $user['id'] ?>">block</a>
				<a href="delet.php?id=<?= $user['id'] ?>">delect</a>&nbsp;</td>
            </tr>
         <?php } ?>
       </table>

 </form>
<html>