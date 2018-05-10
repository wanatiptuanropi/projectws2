<!doctype html>
<html lang="en">
    <head>
        <title>Employee</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
        <?php include('navbar.php'); ?>

        <div class="row ">
            <h3 class="col-6">Employee List</h3> 
            <div class="col-6">
                <a href="allEmployeeReport.php" class="btn btn-info float-right">View All Employee Service History</a>
            </div>
        </div><br>
       
        <form action="employeeReprt.php" method="post">
            <div class="row text-center">
                <?php
                    $connect = mysqli_connect("localhost","root","","petsalon");
                    $sql = "select * from employee";
                    $result = mysqli_query($connect,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
                ?>
                    <div class="col-12 col-lg-6">
                        <div class="card" style="width:400px; margin:auto;">
                            <img class="card-img-top" src="images/img_avatar6.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row['EmpName'] ." ". $row['EmpLname'] ?></h4>
                                <p class="card-text">
                                    <?php echo $row['Address'] ?><br>
                                    Tel: <?php echo $row['Tel'] ?>
                                </p>
                                <a href="employeeReport.php?empid=<?php echo $row['EmpID']; ?>" class="btn btn-info" name="empid">
                                    View Service History
                                </a>
                            </div>
                        </div><br>
                    </div>
                <?php
                    }
                ?>
            </div>
            </form>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>