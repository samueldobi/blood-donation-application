<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Donors</title>
    
    <!-- favicon-->
    <link rel="icon" href="./assets/images/blood-drop.png" />

  <!-- Bootsrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/dashboard.css">
    </head>
    <body id="body-pd">
    <header class="header " id="header">
        <div class="header_toggle p-3"> 
            <i class='bx bx-menu' ></i>
              <p class="text-dark" id="header-toggle">
                <i class="bi bi-filter-left "></i>
            </p> 
        </div>
        <div class="dashboard-info ">

            <div class="">  

                    <div class="navbar-nav ms-auto">
                      
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo htmlspecialchars($_SESSION['profile_picture']); ?>" alt="" class="rounded-circle" width="30" height="30">
                                    Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>
                                </a>

                            </div>
                 
                    </div>
                </div>
                   
                  
                </div>
        </div>
    </header>
    <!-- sidebar -->
    <div class=" side-bar l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <a href="index.php" class="nav_logo">
                    <i class='bx bx-layer'>
                        <i class="bi bi-house-add text-light"></i>
                    </i>
                    <span class="nav_logo-name">  Campus Donors</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active" data-segment="profile">
                        <i class="bi bi-person-circle"></i>
                        <span class="nav_name">Profile</span>
                    </a>
                    <a href="#" class="nav_link" data-segment="donation-history">
                        <i class="bi bi-backpack3-fill"></i>
                        <span class="nav_name">Donation History</span>
                    </a>
                    <a href="#" class="nav_link" data-segment="notifications">
                        <i class="bi bi-bell"></i>
                        <span class="nav_name">Notifications</span>
                    </a>
                    <!-- <a href="#" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">Bookmark</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span>
                    </a> -->
                </div>
            </div>
            <a href="#" class="nav_link">
                <i class="bi bi-box-arrow-right"></i>
                <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>
    <!-- sidebar -->
    
    <!--Container Main start-->
    <section class="overview">
        <!-- Profile overview -->
        <div id="profile" class="segment action">
            <p class=" fs-2 fw-bold">Profile Overview</p>
                <div class="row justify-content-evenly  mt-5 mb-5 ">
                    <div class="col-10 col-md-3 rounded border dashcard text-center fw-bold fs-3 mt-5 mb-5">
                         
                                <p class="p-2 ">Total Donations:</p>
                                <p class="">0</p>
                        </div>
                    <div class="col-10 col-md-3 rounded border dashcard-two text-center fw-bold fs-3 mt-5 mb-5">
                       
                                <p class="p-2">Total Recieved:</p>
                                <p>0</p>
                        </div>
                    <div class="col-10 col-md-3 rounded border dashcard-three text-center fw-bold fs-3 mt-5 mb-5">

                                <p class="p-2">Total Donations:</p>
                                <p>0</p>
                        </div>
            
                </div>
            </div>
        <!-- Profile overview -->

        <!-- Donation History -->
         <div id="donation-history" class="segment">
           <p>donation history</p>
         </div>
        <!-- Donation History -->
         <!-- Notifications -->
          <div id="notifications" class="segment">
              <p>Notifications</p>
          </div>
         <!-- Notifications -->
    </section>

    <!--Container Main end-->
    </body>
 </section>

 <script src="./assets/dashboard.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
