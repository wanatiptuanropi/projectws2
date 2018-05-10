<!doctype html>
<html lang="en">
    <head>
        <title>Bill List</title>
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
                $connect = mysqli_connect("localhost","root","","petsalon");
                $sql = "SELECT pet.PetName, pet.PetID, customer.CusName, customer.CusID, service_bill.SerDate, service_bill.TotalPrice, service_bill.Status, service_bill.SerID, service.SerName
                        FROM pet, customer, service_bill, service
                        WHERE pet.PetID = service_bill.PetID
                        AND customer.CusID = pet.CusID
                        AND service_bill.SerID = service.SerID
                        ORDER BY service_bill.SerDate DESC";
                $result = mysqli_query($connect,$sql);
            ?>

            <h3 class="text-center">Bill List</h3>

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Pet Name</th>
                            <th>Customer Name</th>
                            <th>Date</th>
                            <th>Service</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($result))
                            {
                        ?>
                        <form name="form" method="get" action="delete.php">  
                            <tr>
                                <td>
                                    <?php echo $row['PetName']?>
                                    <input type="hidden" name="petname" value="<?php echo $row['PetName']?>">
                                    <input type="hidden" name="petID" value="<?php echo $row['PetID']?>">
                                </td>
                                <td>
                                    <?php echo $row['CusName']?>
                                    <input type="hidden" name="cusID" value="<?php echo $row['CusID']?>">
                                </td>
                                <td>
                                    <?php echo $row['SerDate']?>
                                    <input type="hidden" name="serDate" value="<?php echo $row['SerDate']?>">
                                </td>
                                <td>
                                    <?php echo $row['SerName']?>
                                    <input type="hidden" name="serName" value="<?php echo $row['SerName']?>">
                                    <input type="hidden" name="serid" value="<?php echo $row['SerID']?>">
                                </td>
                                <td>
                                    <?php echo $row['TotalPrice']?>
                                    <input type="hidden" name="totalPrice" value="<?php echo $row['TotalPrice']?>">
                                </td>
                                <td><?php echo $row['Status']?></td>
                                <td><button type="submit" class="btn btn-info" style="width:100px; margin:5px;" onclick="javascript: form.action='payment.php';">Payment</button></td>
                                <td><button type="submit" class="btn btn-danger" style="width:100px; margin:5px;" onclick="return confirmdelete();">Delete</button></td>
                            </tr>
                            </form> 
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            function confirmdelete()
            {
                return confirm('Are you sure you want to delete this?');
            }
        </script>
    </body>
</html>