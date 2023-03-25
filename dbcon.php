<?php
    $con = mysqli_connect("localhost","root","","crud-application");
    if (!$con) {
        die("connection failed".mysqli_connect_error());
    }
?>