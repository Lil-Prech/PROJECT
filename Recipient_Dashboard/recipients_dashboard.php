<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/donor_dashboard.css">
        <title>Dashboard</title>
        <!--Boostrap-->
      
        <!--Icons-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet"/>
    </head>
    <body>
     <!--Sidebar Navigation-->
        <div class="container">
            <div class="navigation active">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon" id="logo">
                                <img src="/assets/images/logoooo (2).png">
                            </span>
                            <span class="title">E-Vitalant</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
        
                            <span class="icon">
                                <i class="ri-home-heart-fill"></i>
                            </span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="blood_form.php">
                            <span class="icon">
                                <i class="ri-drop-fill"></i>
                            </span>
                            <span class="title">Request Blood</span>
                        </a>
                    </li>
                    <li>
                        <a href="appoint.php">
                            <span class="icon">
                                <i class="ri-calendar-schedule-line"></i>
                            </span>
                            <span class="title">Appointments</span>
                        </a>
                    </li>
                    <li>
                        <a href="message.php">
                            <span class="icon" >
                                <i class="ri-message-line"></i>
                            </span>
                            <span class="title">Messages</span>
                        </a>
                    </li>

                    <li>
                        <a href="../php/admin/logout.php">
                            <span class="icon">
                                <i class="ri-logout-box-r-line"></i>
                            </span>
                            <span class="title">Logout</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <!--End of sidebar-->
        <!--Main-->
        <div class="main active">
            <div class="topbar">
                <div class="toggle">
                    <i class="ri-menu-2-line"></i>  
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <i class="ri-search-eye-line"></i>
                    </label>
                </div>
                
                <div class="user">
                    <img src="../assets/images/profile.jpeg" alt="Profile"  onclick="toggleMenu()">
                    <div class="sub-menu-wrap" id="subMenu">
                       <div class="sub-menu">
                        <div class="user-info">
                            <h3>Mary</h3>
                        </div>
                        <hr>
                        <a href="#" class="sub-menu-link">
                            <i class="ri-profile-line"></i>
                            <p>Edit Profile</p>  
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="ri-settings-2-line"></i>
                            <p>Settings</p>  
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="ri-question-line"></i>
                            <p>Help & Support</p>  
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="ri-logout-box-r-line"></i>
                            <p>Exit</p>  
                            <span>></span>
                        </a>

                    
                       </div>
                    </div>
                </div>
            </div>

            <!--Cards-->
                <div class="cardbox-3">
                    <div class="card">
                        <div class="content">
                            <div class="iconBx">
                                <i class="ri-calendar-schedule-line"></i>
                            </div>
                            <div class="cardname">Total Appointments</div>
                            <div class="numbers">2</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="iconBx">
                                <i class="ri-message-line"></i>
                            </div>
                            <div class="cardname">Total Messages</div>
                            <div class="numbers">5</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="iconBx">
                                <i class="ri-check-double-fill"></i>
                            </div>
                            <div class="cardname">Approved Requests</div>
                            <div class="numbers">10</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="iconBx">
                                <i class="ri-drop-fill"></i>
                            </div>
                            <div class="cardname">Blood Collected (in bags)</div>
                            <div class="numbers">5 Bags</div>
                        </div>
                    </div>
                </div>
            

           
           
        

  



     
    



    <script src="../JS/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>