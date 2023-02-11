
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/studentlogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="home_line_1" style="background-color: #21ebae;position: fixed;width: 100%; padding-top: 15px; padding-bottom: 15px ;">
        <a href="#" style="padding: 20px 20px; font-size: larger; font-weight: bold; color: white;">Faculty Feedback System</a>
        <div class="dropdown" style="float: right;">
            <a id="dropdown-admin-login",class="dropbtn" href="./dashboard.php" style="padding-right: 100px; color:white ; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold;">Home</a>
            <div class="dropdown-content">
            <a href="./adminpassword.php">Change Password</a>
            <a href="../login/admin.php">Logout</a>
            </div>
        </div>
    </div>
    <div class="dashboard" style="padding-top: 50px;">
        <div id="dashboard-1" >
                <!-- <p style="background-color: #337ab7; box-sizing: border-box; padding-top: 10px; padding-bottom: 10px; padding-left: 5px; width: 200px;">Dashboard</p> -->
                <!-- this image refers to the profile of the user -->
                <p class="student-dashboard-content-1" style="padding-right: 105px;"><a href="./dashboardhome.php"> Dashboard</a></p>
                
                <hr>
                <p class="student-dashboard-content-3" style="padding-right: 105px;"><a href="./contactus.php">Contact us</a></p>
                <hr>
                <div class="dropdown" style="float: right;">
                <p class="student-dashboard-content-3" style="padding-right: 105px;"><a href="./manage-students.html">Student</a></p>
                <div class="dropdown-content">
                        <a href="./manage-students.html">Manage Students</a>
                    </div>
                    <br>
                    <hr>
                </div>
                
                <div class="dropdown" style="float: right;">
                <p class="student-dashboard-content-3" style="padding-right: 105px;"><a href="#">Feedback</a></p>
                <div class="dropdown-content">
                        <a href="./feedback.php">Feedback</a>
                        <a href="./average-feedback.php">Feedback Average</a>
                    </div>
                    <br>
                    <hr>
                </div>
                <div class="dropdown" style="float: right;">
                    <p class="student-dashboard-content-2" style="padding-right: 105px;"><a href="#">Faculty</a></p>
                    <div class="dropdown-content">
                        <a href="./add-faculty.php">Add Faculty</a>
                        <a href="./manage_faculty.php">Manage  Faculty</a>
                    </div>
                    <br>
                    <hr>
                </div>
                
        </div>
        <div style="padding-top: 30px;">
        <h1 align="center" style="text-decoration:underline"><a href="">Admin Dashboard</a></h1>
        <div style="padding-left: 100px; padding-top: 50px;">
<?php 
//all complaints
include "../dbconfig.php";
$qq=mysqli_query($conn,"select * from faculty ");
$rows=mysqli_num_rows($qq);			
echo "<h2 style='color:green'>Total Number of Faculty : $rows</h2>";	

//all emegency compalints
$q=mysqli_query($conn,"select * from user");
$r1=mysqli_num_rows($q);			
echo "<h2 style='color:orange'>Total Number of Student : $r1</h2>";	


//all users
$q2=mysqli_query($conn,"select * from feedback");
$r2=mysqli_num_rows($q2);			
echo "<h2 style='color:black'>Total Number feedback given by users  : $r2</h2>";	
 
?>
</div>
</div>
    
</body>
</html>