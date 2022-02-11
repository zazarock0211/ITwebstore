<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url("../img/1920x1080_texture-black-background.jpg");
  font-family: verdana;
  font-size: 24px;
}

h1 {
  text-shadow: 3px 3px #33FFFF;
  color: #FFFF00;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style> 
</head>
<body>
<h1>ระบบจัดการสมาชิก IT Web Store</h1>

  <meta charset="UTF-8">
    <?php
    //1. เชื่อมต่อ database: 
    include('com.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

    //2. query ข้อมูลจากตาราง: 
    $query = "SELECT * FROM data_user ORDER BY ID asc" or die("Error:" . mysqli_error()); 
    //3. execute the query. 
    $result = mysqli_query($con, $query); 
    //4 . แสดงข้อมูลที่ query ออกมา: 

    //ใช้ตารางในการจัดข้อมูล
    echo "<table border='2' align='center' width='800'>";
    //หัวข้อตาราง
    echo "<tr align='center' bgcolor='#00FFFF'><td>ID</td><td>FName</td><td>LName</td><td>E-mail</td><td>Password</td><td>แก้ไข</td><td>ลบ</td></tr>";
      while($row = mysqli_fetch_array($result)) { 
        echo "<tr align='center' bgcolor='#FFFFFF'>";
        echo "<td>" .$row["ID"] .  "</td> ";
        echo "<td>" .$row["FName"] .  "</td> ";
        echo "<td>" .$row["LName"] .  "</td> ";
        echo "<td>" .$row["EMail"] .  "</td> ";
        echo "<td>" .$row["pwd"] .  "</td> ";
        //แก้ไขข้อมูลส่่ง member_id ที่จะแก้ไขไปที่ฟอร์ม
        echo "<td><a href='userupdateform.php?ID=$row[0]'>edit</a></td> ";
      
      //ลบข้อมูล
        echo "<td><a href='UserDeletes.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
        echo "</tr>";
      }
    echo "</table>";
    //5. close connection
    mysqli_close($con);
    ?>
    <br>
    <center><a href="../index.php" class="btn btn-info" role="button">Back</a></center>  
  </body>
  </html>