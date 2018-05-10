<!doctype html>
<html lang="en">
    <head>
        <title>Report</title>
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
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a class="navbar-brand disabled">
                   <img src="images/logo.png" alt="logo" style="width:40px;">
                </a>
                <a class="navbar-brand" href="#">WebPro Pet Salon</a>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                   </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
               <ul class="navbar-nav">
                 <li class="nav-item">
                   <a class="nav-link" href="index.php">Home</a>
                 </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                       Create Account
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="newCustomer.php">New Customer</a>
                        <a class="dropdown-item" href="newPet.php">New Pet</a>
                    </div>
                 </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Report
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="serviceList.php">Service</a>
                        <a class="dropdown-item" href="employee.php">Employee</a>
                    </div>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
               </ul>
            </div> 
       </nav><br>

            <div class="row ">
                <h3 class="col-6">Service List</h3> 
                <div class="col-6">
                    <a href="allServiceReport.php" class="btn btn-info float-right">View All Service Report</a>
                </div>
            </div><br>

            <form action="serviceReport.php" method="get" class="form-row">
                <div class="col-12 col-md-6 col-lg-4">
                    <label title="Grooming">
                        <a href="serviceReport.php?serid=501" class="btn btn-secondary" style="width:350px;">
                            <img src="images/grooming.png" style="height:120px;">
                        </a>
                    </label>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <labeltitle="Bathing">
                        <a href="serviceReport.php?serid=502" class="btn btn-secondary" style="width:350px;">
                            <img src="images/bathing.png" style="height:120px;">
                        </a>
                    </label>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <label title="Spa">
                        <a href="serviceReport.php?serid=503" class="btn btn-secondary" style="width:350px;">
                            <img src="images/spa.png" style="height:120px;">
                        </a>
                    </label>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <label title="Flea Treatment">
                        <a href="serviceReport.php?serid=504" class="btn btn-secondary" style="width:350px;">
                            <img src="images/flea-treatment.png" style="height:120px;">
                        </a>
                    </label>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <label title="Pet nail cut">
                        <a href="serviceReport.php?serid=505" class="btn btn-secondary" style="width:350px;">
                            <img src="images/pet-nail-cut.png" style="height:120px;">
                        </a>
                    </label>
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