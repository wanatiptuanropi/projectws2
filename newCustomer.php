<!doctype html>
<html lang="en">
    <head>
        <title>New Customer</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php include('navbar.php'); ?>

            <h3 class="text-center">New Customer</h3><hr>

            <form  action="canNewCus.php" method="get" >
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label ">Customer Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="cusname">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Customer LastName</label>
                    <div class="col-sm-5">
                        <input type="text"class="form-control" name="lname" >
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Tel</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="tel" >
                    </div>
                </div>
                <hr>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Pet Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="petname" >
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="age" required>
                    </div> 
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Pet Type</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="typeid">
                            <option value="401">Dog</option>
                            <option value="402">Cat</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group justify-content-center">
                        <button type="submit" class="btn btn-success" style="width:100px; margin:5px;">Confrim</button>                    
                    </div>
                    <div class="form-group justify-content-center">
                        <button type="submit" class="btn btn-warning" style="width:100px; margin:5px;" onclick="javascript: form.action='index.php';">Cancel</button>                    
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