<?php include "../service/user_service.php"; ?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $searchKey = $_POST['searchwaitingusers'];
        $registereds = getRegisteredsByName($searchKey);
    } else {
        $registereds = getAllRegistereds();
    }
?>
<html>
 <form align="center">
  <b Style="color:red">WAITING USERS:</b></br></br>
	 <input id="searchwaitingusers"/>
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
        <input id="searchcurrentusers"/>
        <button> search </button></br></br>
        <table border="1" align="center">
   
		  <tr border=" 1">
			<td border="1">Name</td>
			<td>Status</td>
			<td>User since</td>
			<td colspan="3">option</td>
		  </tr>
		   <tr>
			<td>alpha</td>
			<td>active</td>
			<td>8/12/2017</td>
			<td><a href="ads">block</td>
			<td><a href="viewprofile.html">viewprofile</td>
			<td><a href="ads">unblock</td>
		  </tr>
		   <tr>
			<td>beta</td>
			<td>blocked</td>
			<td>10/10/2017</td>
			<td><a href="ads">block</td>
			<td><a href="viewprofile.html">viewprofile</td>
			<td><a href="ads">unblock</td>
		  </tr>
       </table>

 </form>
<html>