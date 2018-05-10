<?php
    include('navbar.php');

    $cusname = '\''.$_GET['cusname'].'\'';
    $lname = '\''.$_GET['lname'].'\'';
    $connect = mysqli_connect("localhost","root","","petsalon");
    $sql1 = "SELECT CusID
            FROM customer
            WHERE CusName = $cusname
            AND CusLname = $lname";
    $result1 = mysqli_query($connect,$sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $cusid = $row1['CusID'];
    
    $petname = $_GET['petname'];
    $gender = $_GET['gender'];
    $age = $_GET['age'];
    $typeid = $_GET['typeid'];
    $sql2 = 'INSERT INTO pet VALUES(NULL,"'.$petname.'","'.$gender.'","'.$age.'","'.$typeid.'","'.$cusid.'")';
    $result2 = mysqli_query($connect,$sql2);
    header("location:index.php");
?>