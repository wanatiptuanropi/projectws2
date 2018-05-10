<!doctype html>
<html lang="en">
    <head>
        <?php
            $connect = mysqli_connect("localhost","root","","petsalon");
            $sql = "SELECT employee.EmpName, employee.EmpLname, service_bill.SerDate, service.SerName, service.Price, pet.PetName
                    FROM employee, service_bill, service, pet
                    WHERE employee.EmpID = service_bill.EmpID
                    AND service_bill.SerID = service.SerID
                    AND service_bill.PetID = pet.PetID
                    AND service_bill.SerID = ".$_GET['serid'];
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_array($result);
        ?>
        <title><?php echo $row['SerName'] ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <?php 
            include("navbar.php");
            include("pdfFromHTML.php"); 
            include("printContent.php"); 
        ?>

            <div class="row">
                <h3 class="col-6"><?php echo $row['SerName']; ?></h3> 
                <div class="col-6">
                    <div class="form-group float-right">
                    <input type="hidden" id="reportName" value="ser">
                        <a href="#" class="btn btn-info float-right" onclick="HTMLtoPDF()">Export as PDF</a> &nbsp;
                    </div>
                    <div class="form-group float-right">
                        <a href="#" class="btn btn-info float-right" onclick="printContent('reportTable')">Print</a>
                    </div>
                </div>
            </div>

            <div id="reportTable">
                <h3 id="tittle"><?php echo $row['SerName'] ." Report" ?></h3> 
                <?php 
                    include("pdfFromHTML.php"); 
                    include("printContent.php"); 
                ?>
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>Date</th>
                        <th>Pet Name</th>
                        <th>Employee Name</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $total = 0;
                            $p = 0;
                            $sql1 = "SELECT employee.EmpName, employee.EmpLname, service_bill.SerDate, service.SerName, service.Price, pet.PetName
                                    FROM employee, service_bill, service, pet
                                    WHERE employee.EmpID = service_bill.EmpID
                                    AND service_bill.SerID = service.SerID
                                    AND service_bill.PetID = pet.PetID
                                    AND service_bill.Status = 'Paid'
                                    AND service_bill.SerID = ".$_GET['serid'];
                            $result1 = mysqli_query($connect,$sql1);
                            while($row1 = mysqli_fetch_array($result1))
                            {
                        ?>
                            <tr>
                                <td><?php echo $row1['SerDate']?></td>
                                <td><?php echo $row1['PetName']?></td>
                                <td><?php echo $row1['EmpName'] ." ". $row1['EmpLname']?></td>

                            </tr>
                        <?php
                            $p = $row1['Price'];
                            $total = $total + $p;
                            }
                        ?>
                        <tr>
                            <td><h4>Total Price</h4></td>
                            <td></td>
                            <td><h4><?php echo $total; ?></h4></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row justify-content-center">
               <a href="serviceList.php" class="">
                    <button type="text" class="btn btn-warning" style="width:100px; margin:5px;">Back</button> 
                </a> 
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>$('#tittle').hide();</script>
    </body>
</html>