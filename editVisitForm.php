<!doctype html>
<html lang="en">
    <head>
        <title>Service</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php include('navbar.php'); ?>
            <h3 class="text-center">Visit Form</h3><hr>

            <form name="form" method="get">
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Pet Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control-plaintext" value="" readonly>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Service</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control-plaintext" value="example">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Employee</label>
                    <div class="col-sm-5">
                    <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="NULL">
                                Unknown
                            </label>
                        </div>  
                        <?php 
                            $connect = mysqli_connect("localhost","root","","petsalon");
                            $sql = "select * from employee";
                            $result = mysqli_query($connect,$sql);
                            while($row = mysqli_fetch_array($result))
                            {
                        ?>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">
                                <?php echo $row['EmpName'] ?>
                            </label>
                        </div>  
                        <?php
                            }
                        ?> 
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group justify-content-center">
                        <button type="submit" class="btn btn-success" style="width:100px; margin:5px;" onclick="javascript: form.action='bill.php';">Confirm</button>                    
                    </div>
                    <div class="form-group justify-content-center">
                        <button type="submit" class="btn btn-info" style="width:100px; margin:5px;" onclick="javascript: form.action='payment.php';">Payment</button>                    
                    </div>
                    <div class="form-group justify-content-center">
                        <button type="text" class="btn btn-warning" style="width:100px; margin:5px;" onclick="javascript: form.action='index.php';">Cancel</button> 
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