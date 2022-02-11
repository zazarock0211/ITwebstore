<?php
    $con = mysqli_connect("localhost","root","12345","product") or die ("error : " . mysqli_error($con));
    mysqli_query($con , "SET NAMES 'utf8'");
    ?>