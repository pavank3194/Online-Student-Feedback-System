<?php
	include('../dbconfig.php');
	session_start();
	extract($_POST);
	if(isset($login))
	{
        $que=mysqli_query($conn,"select user and pass from admin where user='$mail' and pass='$password'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
                    
				$_SESSION['user']=$email;
				header('location:../admin/dashboard.php');

			}
		else
			{
				$err="<font color='red'>Wrong Email or Password !</font>";
			}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Feedback System</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        label{
            /* width: 100%; */
            height: 20px;
            padding-bottom: 20px;
            padding-left: 40px;
            padding-right: 100px;
            /* display: block; */
            font-size: large;
        }
        input{
            width: 300px;
            height: 35px;
            padding-left: 20px;
            padding-right: 20px;
            /* border:; */
        }
    </style>
</head>
<body>
    <div class="home_line_1" style="background-color: #337ab7;position: fixed;width: 100%; padding-top: 20px; padding-bottom: 20px ;">
        <a href="#" style="padding: 20px 100px; color: white;">Online Feedback System</a>
        <div class="home_links" style="float: right;">
            <a class="home-1" href="../index.php">Home   </a>
            <a id="About-1" href="../About.html">About</a>
            <a id="Registration-1" href="../Registration.php">Registration   </a>
            <div class="dropdown">
                <a id="About-1",class="dropbtn" href="admin.php">Login</a>
                <div class="dropdown-content">
                <a href="admin.php">Admin</a>
                <a href="student.html">Student</a>
                <a href="faculty.html">Faculty</a>
                </div>
              </div>
            <a id="Contact-1" href="../Contact.php">Contact</a>
        </div>
        
    </div>
    <!-- <div style="width: 100%;height:100%" class="anudeep"></div> -->
    <!-- <img src="./EWW5kumWkAAkzkR.jpg_large" class="sreenidhi-img" alt="sreenidhi "> -->
    <center>
        <table>
<DIV style="text-align: center; padding-top: 100px;">
    <h2 >Admin Login</h2>
    <br><br>
    <form method="post">
    <label for="mail">Enter Your Mail</label>
    <input type="email" name="mail" id="enter-mail">
    <br><br>
    <label for="password">Enter Your Password</label>
    <input type="password" name="password" id="enter-password">
    <br><br>
    <input type="submit" name="login">
</form>
    <!-- <button>Login</button>
     -->
     <!-- <input type="button" value="Login" onclick="adminlogin()">
     <div id="adminlogin-error" style="color: red   ;"></div> -->
</DIV>
</table>
</center>
<script src="../css/admin.js"></script>
</body>
</html>