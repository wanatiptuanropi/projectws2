<!doctype html>
<html lang="en">
    <head>
        <title>Home</title>
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
            ?>

            <h3>Please select service</h3>

            <div class="row text-center">
                <form action="search.php" method="get" class="form-row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <label title="Grooming">
                            <button type="text" class="btn btn-info" style="width:350px;" name="serid" value="501">
                                <img src="images/grooming.png" style="height:120px;">
                            </button>
                        </label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label title="Bathing">
                            <button type="text" class="btn btn-info" style="width:350px;" name="serid" value="502">
                                <img src="images/bathing.png" style="height:120px;">
                            </button>
                        </label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label title="Spa">
                            <button type="text" class="btn btn-info" style="width:350px;" name="serid" value="503">
                                <img src="images/spa.png" style="height:120px;">
                            </button>
                        </label>
                    </div> 
                    <div class="col-12 col-md-6 col-lg-4">
                        <label title="Flea Treatment">
                            <button type="submit" class="btn btn-info" style="width:350px;" name="serid" value="504">
                                <img src="images/flea-treatment.png" style="height:120px;">
                            </button>
                        </label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label title="Pet nail cut">
                            <button type="submit" class="btn btn-info" style="width:350px;" name="serid" value="505">
                                <img src="images/pet-nail-cut.png" style="height:120px;">
                            </button>
                        </label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label title="Visit List">
                            <button type="submit" class="btn btn-secondary" style="width:350px;" onclick="javascript: form.action='bill.php';">
                                <img src="images/visit-list.png" style="height:120px;">
                            </button>
                        </label>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>