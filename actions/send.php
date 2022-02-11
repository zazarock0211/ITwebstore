<?PHP
session_start();

/* Easy PHP Send mail by mean (http://oldirh.com)
# Create : 22/06/2009
*/


if($_POST['action']){
 if($_POST['verifycode'] !=$_SESSION['total'] ){
    echo " Verify Code ไม่ถูกต้อง โปรดใสใหม่อีกครั้ง<br>";
 }else{
     $headers  = "MIME-Version: 1.0\r\n";
     $headers .= "Content-type: text/html; charset=tis-620\r\n";
     $headers .= "From:  ".$_POST['name']." <".$_POST['email'].">\r\n";

     $msgs .= " จากคุณ  ".$_POST['name'].'<br>';
     $msgs .= " โทร  ".$_POST['tel'].'<br>';
     $msgs .= "ข้อความ<br>".$_POST['msg'];


     $mailto = "zazapooloo@gmail.com"; # อีเมล์ผู้รับ
     if(mail($mailto, $_POST['subj'], $msgs, $headers)){
     echo "ส่งสำเร็จ";
     }else{
     echo "ส่งไม่สำเร็จ";
     }
     exit();
 }
  }
?>