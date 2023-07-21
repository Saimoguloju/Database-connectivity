<?php
$username = "";
$name="";
$password="";
$email="";
$errors = array();
if(isset($_POST['register'])){
    include 'config.php';
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phno = $_POST['phno'];
    $password = $_POST['password'];
    $query = "SELECT id FROM sai WHERE Username='$username' LIMIT 1";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    if($user){
        echo "user already exists";
    }else{
        $query = "INSERT INTO sai (username, password) VALUES('$username','$password')";
        mysqli_query($conn, $query);
        $query = "INSERT INTO register (username,email,phno, password) VALUES('$username','$email','$phno','$password')";
        mysqli_query($conn, $query);
        echo "Account Created. PLease login again.";
        header("Refresh:3; url= login.html");
    }
}
?>  