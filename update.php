<?php
    $petid = $_GET['petID'];
    $date = '\''.$_GET['serDate'].'\'';
    echo $petid.$serid.$date;
    $connect = mysqli_connect("localhost","root","","petsalon");
    $sql = "UPDATE service_bill
            SET Status = 'Paid'
            WHERE PetID = $petid
            AND SerDate = $date";
    $result = mysqli_query($connect,$sql);
    header("location:index.php");
?>