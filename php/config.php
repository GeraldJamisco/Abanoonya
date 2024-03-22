<?php 
    $conn = mysqli_connect("Localhost", "root", "", "abanoonya");
    if (!$conn) {
        echo "Database connected succesfuly" . mysql_connect_error();
    }
?>