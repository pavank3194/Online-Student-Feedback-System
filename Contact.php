<?php 
include('dbconfig.php');
extract($_POST);
if(isset($save))
{

mysqli_query($conn,"insert into contact values('','$n','$m','$e','$msg',now())");
	
$err="<font color='green'>Admin Will Contact you soon</font>";	

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
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        label{
            width: 100%;
            height: 20px;
            padding-bottom: 20px;
            display: block;
            font-size: large;
        }
        input{
            width: 750px;
            height: 35px;
            /* border:; */
        }
        .phone-number:before{
            content: "";
        display: block;
        background: url("./imgs/download.png") no-repeat ;
        background-size: cover;
        width: 17px;
        height: 17px;
        float: left;
        margin: 0 6px 0 0;
        }
        .email-id:before{
            content: "";
        display: block;
        background: url("./imgs/mail.png") no-repeat ;
        background-size: cover;
        width: 17px;
        height: 17px;
        float: left;
        margin: 0 6px 0 0;
        }
        .timings:before{
            content: "";
        display: block;
        background: url("./imgs/time.png") no-repeat ;
        background-size: cover;
        width: 17px;
        height: 17px;
        float: left;
        margin: 0 6px 0 0;
        }
    </style>
</head>
<body>
    <div class="home_line_1" style="background-color: #337ab7;position: fixed;width: 100%; padding-top: 20px; padding-bottom: 20px ;">
        <a class="link-main" href="#" style="padding: 20px 100px;">Online Feedback System</a>
        <div class="home_links" style="float: right;">
            <a class="home-1" href="index.php">Home   </a>
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
            <a id="Contact-1" href="#">Contact</a>
        </div>
        
    </div>
    <div class="contact-1">

        <div class="contact-data-entry">
            <h2>Contact Us</h2>
            <br>
            <form method="post">
            <label for="n">Name:</label>
            <input type="text" name="n" id="name">
            <br><br>
            <label for="m">Mobile Number:</label>
            <input type="text" name="m" id="number">
            <br><br>
            <label for="e">E-Mail Address:</label>
            <input type="text" name="e" id="mail">
            <br><br>
            <label for="msg">Message:</label>
            <textarea name="msg" id="message" cols="100" rows="15"></textarea>
            <br><br>
            <!-- <button>Submits</button> -->
            <input type="submit" value="submit" name="save">
    </form>
        </div>
        <div>
            <h1>contact details</h1>
            <br><br>
            <p>Sreenidhi Institute Of Science And Technology,</p>
            <p>Snist,Yamnampet,</p>
            <p>Ghatkesar,</p>
            <p>Hyderabad,India 501301</p>
            <br><br>
            <span class="phone-number">p: (+91)7330906448</span>
            <br>
            <span class="email-id">E: <a href="mailto:"> pavank3194@gmail.com </a></span>
            <br>
            <span class="timings">H: Monday-Saturday : 9:00 AM to 9:00 PM</span>
        </div>

    </div>

</body>
</html>