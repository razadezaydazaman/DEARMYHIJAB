<?php

$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';   
    
    $name = $_POST["name"];
    $username = $_POST["username"]; 
    $email = $_POST["email"]; 
    $no_telp = $_POST["no_telp"]; 
    $password = md5($_POST["password"]); 
    $cpassword = md5($_POST['cpassword']);
            
    $sql = "SELECT * FROM users WHERE username='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 

    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {
                
            $sql = "INSERT INTO users(name, username, email, no_telp, password) 
            VALUES ('$name', '$username', '$email', '$no_telp', '$password')";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                header("Location: login/index.php");
            }
        } 
        else { 
            echo '<script>alert("Password does not match!")</script>';
            include 'signup.php';
        }      
    }
    
   if($num>0) 
   {
        echo '<script>alert("Username are not available! Try with another username!")</script>';
        include 'signup.php';
   }    
}    
?>