<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('com.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้

//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลักและไม่แก้ไขข้อมูล
if($_POST["ID"]==''){
echo "<script type='text/javascript'>"; 
echo "alert('Error Contact Admin !!');"; 
echo "window.location = 'adminform-list.php'; "; 
echo "</script>";
}

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$ID = $_POST["ID"];
	$FName = $_POST["FName"];
	$LName = $_POST["LName"];
	$EMail = $_POST["EMail"];
	$pwd = $_POST["pwd"];	

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE data_user SET  
			ID='$ID' ,
			FName='$FName' ,
			LName='$LName' , 
			EMail='$EMail' ,
			pwd='$pwd'
			WHERE ID='$ID' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'adminform-list.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = 'adminform-list.php'; ";
	echo "</script>";
}
?>