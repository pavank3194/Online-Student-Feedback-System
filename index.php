<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Feedback System</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="home_line_1" style="background-color: #337ab7;position: fixed;width: 100%; padding-top: 20px; padding-bottom: 20px ;">
        <a href="#" id="name-name" style="padding: 20px 100px;">Online Feedback System</a>
        <div class="home_links" style="float: right;">
            <a class="home-1" href="#">Home   </a>
            <a id="About-1" href="About.html">About</a>
            <a id="Registration-1" href="Registration.php">Registration   </a>
            <div class="dropdown">
                <a id="About-1",class="dropbtn" href="#">Login</a>
                <div class="dropdown-content">
                <a href="./login/admin.php">Admin</a>
                <a href="./login/student.html">Student</a>
                <a href="./login/faculty.html">Faculty</a>
                </div>
              </div>
              
            <a id="Contact-1" href="Contact.php">Contact</a>
        </div>
        
    </div>
    <div style="width: 100%;height:100%" class="anudeep"></div>
    <img src="./EWW5kumWkAAkzkR.jpg_large" class="sreenidhi-img" alt="sreenidhi ">

</body>
</html>