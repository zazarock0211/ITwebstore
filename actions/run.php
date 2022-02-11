<?ob_start();?>
<html>
<body>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php

$objConnect = mysql_connect("localhost","root","zazarock0211") 
or die("Error Connect to Database");

$objDB = mysql_select_db("product");
mysql_query("SET NAMES utf8"); 

    $strSQL = "INSERT INTO work ";

    $strSQL .="(Name,Email,Phone,Username,Password) ";

    $strSQL .="VALUES ";

    $strSQL .="('".$_POST["Name"]."','".$_POST["Email"]."' ";

    $strSQL .=",'".$_POST["Phone"]."','".$_POST["Username"]."' ";

    $strSQL .=",'".$_POST["Password"]."' ";
    

    $objQuery = mysql_query($strSQL);
            if($objQuery)
            {
            header('Location:index.php');
            }
            else
            {
            echo "Error Save [".$strSQL."]";
            }

    mysql_close($objConnect);
?>

</body>

</html>