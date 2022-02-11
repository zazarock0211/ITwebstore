<?ob_start()?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url("download.jpg");
      }

</style> 
    </head>


<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('com.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลัก
if($_GET["ID"]==''){ 
echo "<script type='text/javascript'>"; 
echo "alert('Error Contact Admin !!');"; 
echo "window.location = 'adminform-list.php'; "; 
echo "</script>"; 
}

//รับค่าไอดีที่จะแก้ไข
$ID = mysqli_real_escape_string($con,$_GET['ID']);

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM data_user WHERE ID ='$ID' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>

<form action="userupdate_db.php" method="post" name="updateuser" id="updateuser">
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><b>แก้ไขข้อมูลสมาชิก</b></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ID : </td>
      <td bgcolor="#EBEBEB">
      
      <p><input type="text" name="ID" value="<?php echo $ID; ?>" disabled='disabled' />
<input type="hidden" name="ID" value="<?php echo $ID; ?>" />
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">FName 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="FName" type="text" id="FName" value="<?=$FName;?>" size="30" placeholder="Thai and Eng"  required="required"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">LName 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="LName" type="text" id="LName" value="<?=$LName;?>" size="30" placeholder="Thai and Eng"  required="required"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">EMail 
        <label> :</label></td>
      <td bgcolor="#EBEBEB"><input name="EMail" type="text" id="EMail" value="<?=$EMail;?>" size="30" placeholder="Thai and Eng"  required="required"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
     <tr>
      <td align="right" bgcolor="#EBEBEB">Password : </td>
      <td bgcolor="#EBEBEB"><input name="pwd" type="pwd" id="pwd" value="<?=$pwd;?>" size="30" placeholder="ตัวอย่าง pisit.bow@gmail.com"  required="required"/></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;
       <input type="submit" name="Update" id="Update" value="แก้ไข" />
        <input type="button" value=" ยกเลิก " onclick="window.location='adminform-list.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;</td>
        
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>
</form>