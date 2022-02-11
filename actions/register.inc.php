<?php
include('../config/db.inc.php');
if(isset($_POST['FName'])){
    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $EMail = $_POST['EMail'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT ID FROM users WHERE EMail='$EMail'";
    $result = $conn->query($sql);
    $check_email_exist = mysqli_num_rows($result);
    if($check_email_exist){
        header("location: ../register.php?error&message=Email นี้ถูกใช้งานไปแล้ว");
    }else{
        $sql = "INSERT INTO data_user (FName, LName, EMail, pwd) VALUES ('$FName', '$LName', '$EMail', '$pwd')";
        $result = $conn->query($sql);
        if($result){
            header("location: ../login.php?success&message=สมัครสมาชิกสำเร็จ");
        }else{
            header("location: ../register.php?error&message=Error Login!");
        }
    }
}else{
    header("location: ../login.php");
}
?>