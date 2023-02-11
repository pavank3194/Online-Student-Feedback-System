<?php
//error_reporting(1);
	include('../dbconfig.php');
	extract($_POST);
	if(isset($save))
	{	
		if(strlen($mob)<10 || strlen($mob)>10)
		{
		$err="<font color='red'>Mobile number must be 10 digit</font>";
		}
		else
		{
		//for auto genrate Password
		/*
		$x=rand(1,99);
		$p= md5($x);
		$pass=substr($p,1,6);
		*/
		//for user_alias
		$temp=substr($name,0,4);
		$temp1=substr($mob,0,4);
		$user_name=$temp.$temp1;
		
$q=mysqli_query($conn,"select * from faculty where email='$email'");
	$r=mysqli_num_rows($q);	
	if($r)
	{
	$err="<font color='red'>This email already exists choose diff email.</font>";
	}
	else
	{	
		mysqli_query($conn,"insert into faculty values('','$user_name','$name','$Designation','$prg','$sem','$email','$pass','$mob',now(),'0')");
		
	// $subject ="New User Account Creation";
	// $from="info@phptpoint.com";
	// $message ="User name: ".$user_name." Password ".$pass;
    // $headers = "From:".$from;
    // mail($email,$subject,$message,$headers);
		
	$err="<font color='green'>New Faculty Successfully Added.</font>";
	}
	}
}	

?>

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
        <div id="dashboard-1"  >
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
                        <a href="#">Add Faculty</a>
                        <a href="./manage_faculty.php">Manage  Faculty</a>
                    </div>
                    <br>
                    <hr>
                </div>
                
        </div>
        <div style="margin-top: 50px;">
        <!-- <div style="background-image:url(../EWW5kumWkAAkzkR.jpg_large) ;"></div> -->
        <h1 style="margin-left: 30px;">Add Faculty</h1>
        <br><br>
        <hr>
        
        <form method="post">
        <div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
        <div style="margin-top: 50px; margin-left: 50px ;">
            <label for="name">Name :</label><br>
            <input style="padding: 9px 350px 9px 5px; border-radius:5px;" type="text" name="name" id="">
            <br><br>
            <label for="Designation">Designation :</label><br>
            <input style="padding: 9px 350px 9px 5px; border-radius:5px;" type="text" name="Designation" id="">
            <br><br>
            <label for="email">E-Mail :</label><br>
            <input style="padding: 9px 350px 9px 5px; border-radius:5px;" type="mail" name="email" id="">
            <br><br>
            <label for="pass" >Password :</label><br>
            <input style="padding: 9px 350px 9px 5px; border-radius:5px;" type="password" name="pass"  id="">
            <br><br>
            <label for="prg">Program:</label><br>
            <input style="padding: 9px 350px 9px 5px; border-radius:5px;" type="text" name="prg" id="">
            <br><br>
            <label for="sem">Semester :</label><br>
            <select name="sem" id="faculty-name" style="padding: 9px 484px 9px 5px;border: 2px solid black; border-radius:5px;">
                <option value="i">i</option>
                <option value="ii">ii</option>
                <option value="iii">iii</option>
                <option value="iv">iv</option>
                <option value="v">v</option>
                <option value="vi">vi</option>
                <option value="vii">vii</option>
                <option value="viii">viii</option>
            </select>
            <br><br>
            <label for="mob">Mobile Number :</label><br>
            <input style="padding: 9px 350px 9px 5px; border-radius:5px;" type="number" name="mob" id="">
            <br><br>
            <input  type="submit" value="Add New Faculty" name="save" style="padding: 9px ;background-color:rgba(96, 243, 145, 0.89);border:none; border-radius:5px;">
            <br><br><br>
            <p>for any quaries contact us at @ <a href="#">pavank3194@gmail.com</a></p>
        </div>
</form>
        </div>
        
        
    </div>
    </div>
</body>
</html>