<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        
    <title>Doctors</title>
    <style>
         .dashbord-tables,.doctor-heade{
            animation: transitionIn-Y-over 0.5s;
        }
        .filter-container{
            animation: transitionIn-Y-bottom  0.5s;
        }
        .sub-table,#anim{
            animation: transitionIn-Y-bottom 0.5s;
        }
        .doctor-heade{
            animation: transitionIn-Y-over 0.5s;
        }
        
    </style>
</head>
<body>
    <?php

    //learn from w3schools.com

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='d'){
            header("location: ../login.php");
        }else{
            $useremail=$_SESSION["user"];
        }

    }else{
        header("location: ../login.php");
    }


    //import database
    include("../connection.php");
    $userrow = $database->query("select * from doctor where demail='$useremail'");
    $userfetch=$userrow->fetch_assoc();
    $userid= $userfetch["did"];
    $username=$userfetch["dname"];


    //echo $userid;
    //echo $username;

    ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <div class="container">
        <div class="menu">
            <table class="menu-container" border="0">
                <tr>
                    <td style="padding:10px" colspan="2">
                        <table border="0" class="profile-container">
                            <tr>
                                <td width="30%" style="padding-left:20px" >
                                    <img src="../images/user.png" alt="" width="100%" style="border-radius:50%">
                                </td>
                                <td style="padding:0px;margin:0px;">
                                    <p class="profile-title"><?php echo substr($username,0,13)  ?>..</p>
                                    <p class="profile-subtitle"><?php echo substr($useremail,0,22)  ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="#"><input type="button" value="Log out" class="logout-btn btn-primary-soft btn" ></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr></tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-dashbord menu-active menu-icon-dashbord-active" >
                    <!-- <i class="fa-solid fa-house-user"></i> -->
                        <a href="doctor_home.php" class="non-style-link-menu non-style-link-menu-active">
                            <div><p class="menu-text">Dashboard</p></div>
                        </a>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-schedule ">
                        <a href="view_appointments.php" class="non-style-link-menu">
                            <div><p class="menu-text">View Appointments</p></div>
                        </a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-appoinment">
                        <a href="appointment.php" class="non-style-link-menu">
                            <div><p class="menu-text">View records</p></div>
                        </a>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-settings">
                        <a href="settings.php" class="non-style-link-menu"><div><p class="menu-text">Settings</p></a></div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="dash-body" style="margin-top: 15px">
            <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;" >
                        
                        <tr >
                            
                            <td colspan="1" class="nav-bar" >
                            <p style="font-size: 23px;padding-left:12px;font-weight: 600;margin-left:20px;">     Dashboard</p>
                          
                            </td>
                            <td width="25%">

                            </td>
                            <td width="15%">
                                <p style="font-size: 14px;color: rgb(119, 119, 119);padding: 0;margin: 0;text-align: right;">
                                    Today's Date
                                </p>
                                <p class="heading-sub12" style="padding: 0;margin: 0;">
                                    <?php 
                                date_default_timezone_set('Asia/Kolkata');
        
                                $today = date('Y-m-d');
                                echo $today;


                                // $patientrow = $database->query("select  * from  patient;");
                                // $doctorrow = $database->query("select  * from  doctor;");
                                // $appointmentrow = $database->query("select  * from  appointment where appodate>='$today';");
                                // $schedulerow = $database->query("select  * from  schedule where scheduledate='$today';");


                                ?>
                                </p>
                            </td>
                            <td width="10%">
                                
                            </td>
        
        
                        </tr>
                        <tr>
                        <td colspan="4" >
                        
                            <center>
                                <table class="filter-container doctor-header" style="border: none;width:95%" border="0" >
                                   <tr>
                                      <td >
                                        <h1>Welcome!&nbsp<?php echo $username  ?>.</h1>
                                        <br>
                                        <p><strong>Experience the ultimate convenience with our Lab Appointment System at ABC Laboratories. 
                                            Dive into your daily schedule and effortlessly reach patients right from the comfort of your home. Your complete service journey starts here!"</strong><br><br>
                                        </p>
                                        
                                        <br>
                                        <br>
                                      </td>
                                    </tr>
                                </table>
                            </center>
                    
                        </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                 <table border="0" width="100%">
                                     <tr>
                                     <td>


                            
<p id="anim" style="font-size: 20px;font-weight:600;padding-left: 40px;">Your Up Coming Appointments</p>
<center>
    <div class="abc scroll" style="height: 250px;padding: 0;margin: 0;">
    <table width="85%" class="sub-table scrolldown" border="0" >
    <thead>
        
    <tr>
            <th class="table-headin">Scheduled Date</th>
            
            <th class="table-headin">Scheduled Time</th>
            <th class="table-headin">Test</th>
                
    </tr>
    </thead>
    <tbody>
    
        

        </tbody>

    </table>
    </div>
    </center>

</td>
            </table>
        </div> 
        
    </div> <!-- Closing tag for div.container -->

</body>
</html>
