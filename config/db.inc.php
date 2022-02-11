<?php 
$host = "localhost";
$user = "root";
$password = "12345";
$db = "product";

$conn = new mysqli($host, $user, $password, $db);
mysqli_set_charset($conn,'utf8');
if(mysqli_connect_error()){
    echo "เชื่อมต่อไม่สำเร็จ";

}else{
    echo "เชื่อมต่อสำเร็จ";
}
?>