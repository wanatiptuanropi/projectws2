<!doctype html>
<html lang="en">
    <head>
        <title>Receipt</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php 
                include('navbar.php'); 
                $petid = $_GET['petID'];
                $cusid = $_GET['cusID'];
                $connect = mysqli_connect("localhost","root","","petsalon");
                $sql = "SELECT customer.CusName, customer.CusLname, pet.PetName
                        FROM customer, pet
                        WHERE customer.CusID = pet.CusID
                        AND customer.CusID = $cusid
                        AND pet.PetID = $petid";
                $result = mysqli_query($connect,$sql);
                $row = mysqli_fetch_array($result);
            ?>

            <form action="update.php" method="get">
                <div class="content-wrapper">            
                    <div class="content-body">
                        <section class="card">
                            <div id="invoice-template" class="card-body">
                                <div id="invoice-company-details" class="row">
                                    <div class="col-md-6 col-sm-12 text-center text-md-left">
                                        <div class="media">
                                        <img src="images/logo.png" style="width:15%;">
                                        <div class="media-body">
                                            <ul class="ml-2 px-0 list-unstyled">
                                            <li class="text-bold-800">Webpro Salon</li>
                                            <li>4025 Oak Avenue,</li>
                                            <li>Kathu,</li>
                                            <li>Phuket 83120,</li>
                                            <li>Thailand</li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 text-center text-md-right">
                                        <h2>Receipt</h2>
                                        <p class="pb-3">Date: <?php echo $_GET['serDate']?></p>
                                    </div>
                                </div>
                                <div id="invoice-customer-details" class="row pt-2">
                                    <div class="col-sm-12 text-center text-md-left">
                                        <p class="text-muted"><b>Customer Name: </b><?php echo $row['CusName']." ".$row['CusLname']?></p>
                                        <p class="text-muted"><b>Pet Name: </b><?php echo $_GET['petname'] ?></p>
                                    </div>
                                </div>
                                <div id="invoice-items-details" class="pt-2">
                                    <div class="row">
                                        <div class="table-responsive col-sm-12">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Item &amp; Service</th>
                                                <th class="text-right">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $date = '\''.$_GET['serDate'].'\'';
                                                    $sql1 = "SELECT service.SerName, service.Price, service_bill.SerID
                                                            FROM service, service_bill
                                                            WHERE service.SerID = service_bill.SerID
                                                            AND service_bill.PetID = $petid
                                                            AND service_bill.SerDate = $date";
                                                    $result1 = mysqli_query($connect,$sql1);
                                                    $i = 1;
                                                    $price = 0;
                                                    $totalprice = 0;
                                                    while($row1 = mysqli_fetch_array($result1))
                                                    {
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i ?></th> 
                                                        <td><?php echo $row1['SerName'] ?></td>
                                                        <td class="text-right"><?php echo $row1['Price'] ?></td>
                                                        <input type="hidden" name="serid" value="<?php echo $row1['SerID']?>">
                                                    </tr>
                                                <?php
                                                        $price = $row1['Price'];
                                                        $totalprice = $totalprice + $price;
                                                        $i++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="lead col-6">Total Price</div>
                                        <div class="lead col-6 text-right"><?php echo $totalprice ?></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div><br>
                <div class="row justify-content-center">
                    <a href="index.php" class="">
                        <input type="hidden" name="petID" value="<?php echo $_GET['petID']?>">
                        <input type="hidden" name="serDate" value="<?php echo $_GET['serDate']?>">
                        <button type="text" class="btn btn-info" style="width:100px; margin:5px;" >Paid</button>
                    </a>
                    <a href="index.php" class="">
                        <button type="text" class="btn btn-warning" style="width:100px; margin:5px;" onclick="javascript: form.action='bill.php';">Cancel</button>
                    </a> 
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