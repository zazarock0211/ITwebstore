<?ob_start()?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url("../img/street_night_wet_155637_1920x1080.jpg");
      }
    </style> 
</head>

        <?php
            //1. เชื่อมต่อ database: 
            include('com.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
            //ตรวจสอบถ้าว่างให้เด้งไปหน้าหลัก

            //รับค่าไอดีที่จะแก้ไข
            $ID = $_GET['ID'];

            //2. query ข้อมูลจากตาราง: 
            $sql = "SELECT * FROM data_user WHERE ID = '$ID' ";
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . $mysqli->connect_error);
            $row_show = mysqli_fetch_assoc($result);
            ?>

                    <div class="container rounded bg-white mt-5">
                        <div class="row">
                            <div class="col-md-4 border-right">
                                <div class="d-flex flex-column align-items-center text-center mt-5">
                                    <?php if($row_show['profile_img'] != "0"){?>
                                    <img class="rounded-circle mt-4" src="../<?php echo $row_show['profile_img']?>" width="200" height="200">
                                    <?php }else{?>
                                        <img class="rounded-circle mt-5" src="../uploads/47-470043_icons8-flat-businessman-person-icon-png.png" width="150" height="150">
                                    <?php } ?>
                                    <h5  class="mt-2">Name : <?php echo $row_show['FName']?> <?php echo $row_show['LName']?></h5>
                                    <h5>Email : <?php echo $row_show['EMail']?></h5>
                                    <h5>Phone : <?php echo $row_show['Phone']?></h5>
                                </div>
                            </div>



                    
                            <div class="col-md-8">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h6><a href="../index.php">Back to Home</a></h6>
                                            <h6 class="text-center"></h6>
                                            <h6 class="text-right">Edit Profile</h6>
                                    </div>
                                    <form action="userupdate_user.php" method="post" id="updateuser" enctype="multipart/form-data">
                                    <div class="row mt-2">
                                        <div class="col-md-6"><input type="text" name="FName" class="form-control" placeholder="First Name [ Thai or Eng ]" value="<?php echo $row_show['FName']?>" required="required"></div>
                                        <div class="col-md-6"><input type="text" name="LName"  class="form-control" placeholder="Last Name [ Thai or Eng ]" value="<?php echo $row_show['LName']?>" required="required"></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6"><input type="text" name="Phone"  class="form-control" placeholder="Phone Number" value="<?php echo $row_show['Phone']?>" required="required"></div>
                                        <div class="col-md-6"><input type="text" name="Zipcode"  class="form-control" placeholder="ZIP Code" value="<?php echo $row_show['Zipcode']?>" required="required"></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6"><input type="text" name="EMail" class="form-control" placeholder="Email" value="<?php echo $row_show['EMail']?>" required="required"></div>
                                        <div class="col-md-6"><input type="text" name="Country" class="form-control" placeholder="Country [ Thai or Eng ]" value="<?php echo $row_show['Country']?>" required="required"></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6"><input type="text" name="ads" class="form-control" placeholder="address" value="<?php echo $row_show['ads']?>" required="required"></div>
                                        <div class="col-md-6"><input type="file" class="form-control" type="image" name="image" id=""></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6"><input type="password" name="pwd"  class="form-control" placeholder="โปรดกรอกรหัสผ่าน" value="<?php echo $row_show['pwd']?>"></div>
                                    </div>
                                    <div class="mt-5 text-right"><input class="btn btn-primary" type="submit" name="Update" id="Update" value="แก้ไข" />
                                    <input type="hidden" name="ID" value="<?php echo $_SESSION['ID'] ?>" />
                                    &nbsp;</td></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="userupdate_user.php" method="post"></form>