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
                        <a href="#">Feedback</a>
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
        <div style="margin-top: 30px;">
        <!-- <div style="background-image:url(../EWW5kumWkAAkzkR.jpg_large) ;"></div> -->
        <center><h1>List of Students Who are given Feedback</h1></center>
        <?php 
        include "../dbconfig.php";
$q=mysqli_query($conn,"select * from feedback");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<!-- <script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_feedback.php?id='+id;
     }
}
</script>	 -->


<!-- <div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" >Feedback</h1>
	</div>
</div> -->
 

<table class="table table-bordered">

	<thead >
	
	<tr class="success">
		<th>Sr.No</th>
		<th>Student</th>
		<th>Teacher</th>
		<th>Quest1</th>
		<th>Quest2</th>
		<th>Quest3</th>
		<th>Quest4</th>
		<th>Quest5</th>
		<th>Quest6</th>
		<th>Quest7</th>
		<th>Quest8</th>
		<th>Quest9</th>
		<th>Quest10</th>
		<th>Quest11</th>
		<th>Quest12</th>
		<th>Quest13</th>
		<th>Quest14</th>
		</tr>
		</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_array($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			echo "<td>".$row[13]."</td>";
			echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			//echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
	
		
</table>
 
<?php }?>
        </div>
        
        
    </div>
    </div>
</body>
</html>