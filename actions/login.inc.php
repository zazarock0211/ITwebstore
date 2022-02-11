<?php
include('../config/db.inc.php');
if(isset($_POST['EMail'])){
    $EMail = $_POST['EMail'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM data_user WHERE EMail='$EMail' And pwd='$pwd'";
    $result = $conn->query($sql);
    $check_email_exist = mysqli_num_rows($result);
    if($check_email_exist){
        $row = $result->fetch_assoc();
        if($row['pwd'] == $pwd){
            session_start();
            $_SESSION['ID'] =  $row['ID'];
            $_SESSION['UserCurrent'] =  $row;

            $_SESSION['Admin'] = $row['Admin'];

            header("location: ../index.php");
        }else{
            header("location: ../login.php?error&message=Password ไม่ถูกต้อง");
        }
    }else{
        header("location: ../login.php?error&message=ไม่พบผู้ใช้");
    }
}else{
    header("location: ../login.php");
}
?>

