<!doctype html>
<html lang="en">
    <head>
        <title>Search Result</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php include('navbar.php'); ?>
            <h3 class="text-center">Search Result</h3>

            <?php
                $connect = mysqli_connect("localhost","root","","petsalon");
                $sql = "SELECT pet.PetName, pet.PetID, pet.Gender, type.TypeName, customer.CusName
                        FROM pet, type, customer
                        WHERE pet.CusID = customer.CusID
                        AND pet.TypeID = type.TypeID
                        AND pet.PetName LIKE '%".$_GET['petName']."%'";
                $result = mysqli_query($connect,$sql);
            ?>
                        
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th></th>
                        <th>Pet Name</th>
                        <th>Gender</th>
                        <th>Type</th>
                        <th>Owner Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                        <form name="form" method="get" action="search.php">
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="petid" value="<?php echo $row['PetID']; ?>">
                                        </label>
                                    </div> 
                                </td>
                                <td><?php echo $row['PetName'] ?></td>
                                <td><?php echo $row['Gender'] ?></td>
                                <td><?php echo $row['TypeName'] ?></td>
                                <td><?php echo $row['CusName'] ?></td>
                            </tr>
                    <?php 
                        }
                    ?>
                    <input type="hidden" name="serid" value="<?php echo $_GET['serid']; ?>">
                </tbody>
            </table>
            <div class="row justify-content-center">
                <div class="form-group justify-content-center">
                    <button type="submit" class="btn btn-success" style="width:100px; margin:5px;" onclick="javascript: form.action='visitForm.php';">Next</button>                    
                </div>
                <div class="form-group justify-content-center">
                    <button type="text" class="btn btn-warning" style="width:100px; margin:5px;" onclick="javascript: form.action='search.php';">Back</button> 
                </div>
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
