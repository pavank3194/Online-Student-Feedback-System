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
                        <a href="#">Feedback Average</a>
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
        <div style="margin-top: 30px; margin-left: 30px;">
        <!-- <div style="background-image:url(../EWW5kumWkAAkzkR.jpg_large) ;"></div> -->

        <div>
            <!-- <label for="faculty-name" style="font-weight: bold;">Select Faculty</label>
            <select name="faculty-name" id="faculty-name" style="padding: 7px 300px 7px 0px; border-radius: 5px; margin-left:100px;">
                <option value="">select</option>
                <option value="pavan">pavan</option>
                <option value="pavan">pavan</option>
                <option value="pavan">pavan</option>
            </select>
            <button type="submit" name="faculty-name" style="padding: 5px; margin-left:100px;">Check Average</button>
            <br><br>
            <hr color="red">
            <br><br>
            <center>
                <span style="padding-right: 200px;">Total Students :</span>
                count of number of students given feedback
                 <br><br><br>
                <span style="padding-right: 157px;">Average Feedback :</span>
                Average count of feedbacks
              </center> --> 
            <form method="post">
<table class="table table-hover">
<tr>

<th> Select Faculty</th>
<td>
<select name="faculty" class="form-control">
	<?php
    include "../dbconfig.php";
	$sql=mysqli_query($conn,"select * from faculty");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value='".$r['email']."'>".$r['Name']."</option>";
	}
		 ?>
</select>
</td>
<td><input name="sub" type="submit" value="Check Average" class="btn btn-success"/></td>
</tr>
</table>
</form>
<hr style="border:1px solid red"/>


<?php
extract($_POST);
if(isset($sub))
{
//Count total Votes
$r=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
$c=mysqli_num_rows($r);	
echo "<h4>Total Student Attempts : ".$c."</h4>";



/*
$r1=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
$c1=mysqli_fetch_assoc($r1);	
echo "<h4>Total Student Attempts : ".$c1[3]."</h4>";

*/

//question 1 start
error_reporting(1);
$q=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
while($res=mysqli_fetch_array($q))
{
	if($res[3]==5)
	{
	$stongly_agree++;
	} 
	else if($res[3]==4)
	{
	$agree++;
	}
	else if($res[3]==3)
	{
	$neutral++;
	}
	else if($res[3]==2)
	{
	$disagree++;
	}
	else if($res[3]==1)
	{
	$strongly_disagree++;
	}
	
}
//question 1 end


//question 2 start
$q2=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
while($res=mysqli_fetch_array($q2))
{
	if($res[4]==5)
	{
	$stongly_agree1++;
	} 
	else if($res[4]==4)
	{
	$agree++;
	}
	else if($res[4]==3)
	{
	$neutral++;
	}
	else if($res[4]==2)
	{
	$disagree++;
	}
	else if($res[4]==1)
	{
	$strongly_disagree++;
	}
	
}
//question 2 end

//count 
$t=$stongly_agree+$stongly_agree1;
echo $t;





$q=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
while($res=mysqli_fetch_array($q))
{
$count+=$res[3];
$count+=$res[4];
$count+=$res[5];
$count+=$res[6];
$count+=$res[7];
$count+=$res[8];
$count+=$res[9];
$count+=$res[10];
$count+=$res[11];
$count+=$res[12];
$count+=$res[13];
$count+=$res[14];
$count+=$res[15];
}
//echo $count;
}
?>

        </div>
        </div>
        
        
    </div>
    </div>
</body>
</html>