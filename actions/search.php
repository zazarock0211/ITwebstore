<?php

    include('com.php');

    echo '<font color="red">';   
    echo 'คำค้น = ';
    echo $_GET['FName'];
    echo '</font>';
    echo '<br/>';   

    $sql = "SELECT * FROM product WHERE FName LIKE '%$k%' OR LName LIKE '%$A%' ORDER BY ID DESC";
    
    $result = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_array($result))
                                    
?>