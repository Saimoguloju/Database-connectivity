<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('db','cms');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, db);
if($conn === false){
    die("ERROR: Could not connect".mysqli_connect_error());
}else{
}
?>