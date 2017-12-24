<?php include("data_access.php"); ?>
<?php
    function addUser($user){
        $sql = "INSERT INTO user(id, name, email) VALUES(NULL, '$user[name]', '$user[email]')";
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
    
    function getAllUsers(){
        $sql = "SELECT * FROM user";        
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
    
    function getUsersByName($userName){
        $sql = "SELECT * FROM user WHERE name LIKE '%$userName%'";
        $result = executeSQL($sql);
        
        $user = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $user[$i] = $row;
        }
        
        return $user;
    }
?>