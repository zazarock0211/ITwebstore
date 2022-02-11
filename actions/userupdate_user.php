<?php

include('com.php');

	$ID = $_POST["ID"];
	$FName = $_POST["FName"];
	$LName = $_POST["LName"];
	$EMail = $_POST["EMail"];
	$pwd = $_POST["pwd"];
	$Phone = $_POST["Phone"];
	$Zipcode = $_POST["Zipcode"];
	$Country = $_POST["Country"];
	$ads = $_POST["ads"];

if($_FILES['image']['name'] != null){
	$target_dir = "uploads/";
	$target_path = "../uploads/";

	$newname = rand() . $_FILES['image']['name'];
	$tar_upload = $target_path . $newname;
	$tar_adddata = $target_dir . $newname;

	move_uploaded_file($_FILES['image']['tmp_name'],$tar_upload);

	$sql = "UPDATE data_user SET  
		ID='$ID' ,
		FName='$FName' ,
		LName='$LName' , 
		EMail='$EMail' ,
		pwd='$pwd',
		Phone='$Phone' ,
		Zipcode='$Zipcode' , 
		Country='$Country' ,
		ads='$ads',
  		profile_img='$tar_adddata'
		WHERE ID='$ID' ";
}else{
$sql = "UPDATE data_user SET  
	ID='$ID' ,
	FName='$FName' ,
	LName='$LName' , 
	EMail='$EMail' ,
	pwd='$pwd',
	Phone='$Phone' ,
	Zipcode='$Zipcode' , 
	Country='$Country' ,
	ads='$ads'
	WHERE ID='$ID' ";
}

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

header('location: ../index.php');
 ?>