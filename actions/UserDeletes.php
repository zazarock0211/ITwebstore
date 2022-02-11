<meta charset="UTF-8">
<?php
    include ('com.php');

    $ID = $_REQUEST["ID"];

    $sql = "DELETE FROM data_user WHERE ID = '$ID' ";
    $result = mysqli_query($con, $sql) or die ("Error in query : $sql" . mysqli_error());

        if($result){
            echo "<script type='text/javascript'>";
            echo "alert('delete Succesfuly');";
            echo "window.location = 'adminform-list.php';";
            echo "</script>";
        }
        else{
            echo "<script type='text/javascript'>";
            echo "alert('Error back to delete again');";
            echo "</script>";
        }
?>