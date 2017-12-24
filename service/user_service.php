<?php include("data_access.php"); ?>
<?php
    function addRegistered($user){
        $sql = "INSERT INTO `registration`(`id`, `name`, `password`, `email`, `username`, `address`, `phonenumber`, `gender`, `profilepicture`) VALUES (NULL,'$user[name]','$user[password]','$user[email]','$user[username]','$user[address]','$user[phonenumber]','$user[gender]',NULL)";
        $result = executeSQL($sql);
        return $result;
    }
    function addUser($user){
		echo "rukai";
        $sql = "INSERT INTO `user`(`id`, `name`, `password`, `email`, `username`, `address`, `phonenumber`, `gender`, `profilepicture`) VALUES (NULL,'$user[name]','$user[password]','$user[email]','$user[username]','$user[address]','$user[phonenumber]','$user[gender]',NULL)";
        $result = executeSQL($sql);
        return $result;
    }
	
    
    function editUser($user){
        $sql = "UPDATE user SET name='$user[name]', email='$user[email]' WHERE id=$user[id]";
        $result = executeSQL($sql);
        return $result;
    }
    
    function removeUser($userId){
        $sql = "DELETE FROM user WHERE id=$userId";        
        $result = executeSQL($sql);
        return $result;
    }
	function removeRegistered($registeredId){
		
        $sql = "DELETE FROM registration WHERE id=$registeredId";        
        $result = executeSQL($sql);
        return $result;
    }
    
    function getAllUsers(){
        $sql = "SELECT * FROM user";        
        $result = executeSQL($sql);
        
        $user = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $user[$i] = $row;
        }
        
        return $user;
    }
	 function getAllRegistereds(){
        $sql = "SELECT * FROM registration";        
        $result = executeSQL($sql);
        
        $user = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $user[$i] = $row;
        }
        
        return $user;
    }
    
    function getUserById($userId){
        $sql = "SELECT * FROM user WHERE id=$userId";        
        $result = executeSQL($sql);
        
        $user = mysqli_fetch_assoc($result);
        
        return $user;
    }
	function getRegisteredById($registeredId){
        $sql = "SELECT * FROM registration WHERE id=$registeredId";        
        $result = executeSQL($sql);
        
        $registered = mysqli_fetch_assoc($result);
        
        return $registered;
    }
    
    function getUsersByName($userName){
        $sql = "SELECT * FROM user WHERE name LIKE '%$userName%'";
        $result = executeSQL($sql);
        
        $user = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $user[$i] = $row;
        }
        
        return $user;
    }
	 function getRegisteredsByName($userName){
        $sql = "SELECT * FROM registration WHERE name LIKE '%$username%'";
        $result = executeSQL($sql);
        
        $user = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $user[$i] = $row;
        }
        
        return $user;
    }
?>