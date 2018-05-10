<?php
    echo '
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
                            <a class="dropdown-item" href="searchCus.php">New Pet</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Report</a>
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
        </nav><br>';
?>