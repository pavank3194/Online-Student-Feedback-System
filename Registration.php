<?php 
require "dbconfig.php";
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$pro','$sem','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
@move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";

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
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="home_line_1" style="background-color: #337ab7;position: fixed;width: 100%; padding-top: 20px; padding-bottom: 20px ;">
        <a href="#" style="padding: 20px 100px; color: white;">Online Feedback System</a>
        <div class="home_links" style="float: right;">
            <a class="home-1" href="index.php">Home   </a>
            <a id="About-1" href="About.php">About</a>
            <a id="Registration-1" href="./Registration.php">Registration   </a>
            <div class="dropdown">
                <a id="About-1",class="dropbtn" href="./login/admin.php">Login</a>
                <div class="dropdown-content">
                    <a href="./login/admin.php">Admin</a>
                    <a href="./login/student.html">Student</a>
                    <a href="./login/faculty.html">Faculty</a>
                </div>
              </div>
            <a id="Contact-1" href="Contact.php">Contact</a>
        </div>
        
    </div>
    <center>
    <form method="post" enctype="multipart/form-data">
    <caption style="padding-top: 50px;"><h1 align="center" style="padding-top: 50px;">Registration Form</h1></caption>
    <table class="table table-bordered" style="margin-bottom:50px; border: 1px solid black">
    
    <Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
                    <tr>
                        <td>Enter Your name</td>
                        <Td><input  type="text" name="n" class="form-control" style="padding: 9px 600px 9 px 2px; margin:auto;" required/></td>
                    </tr>
                    <tr>
                        <td>Enter Your email </td>
                        <Td><input type="email" name="e" class="form-control" style="padding: 9px 600px 9 px 2px; margin:auto;" required/></td>
                    </tr>
                    
                    <tr>
                        <td>Enter Your Password </td>
                        <Td><input type="password" name="p" class="form-control" style="padding: 9px 600px 9 px 2px; margin:auto;" required/></td>
                    </tr>
                    
                    <tr>
                        <td>Enter Your Mobile </td>
                        <Td><input type="text" name="mob" class="form-control" style="padding: 9px 600px 9 px 2px; margin:auto;" required/></td>
                    </tr>
                    
                    <tr>
                        <td>Select Your Programme</td>
                        <Td><select name="pro" class="form-control" required>
                        
                        <option>BCA</option>
                        <option>MCA</option>
                        <option>B.Tech</option>
                        <option>M.Tech</option>
                        </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Select Your Semester</td>
                        <Td><select name="sem" class="form-control" required>
                        
                        <option>i</option>
                        <option>ii</option>
                        <option>iii</option>
                        <option>iv</option>
                        <option>v</option>
                        <option>vi</option>
                        <option>vii</option>
                        <option>viii</option>
                        </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Select Your Gender</td>
                        <Td>
                    Male<input type="radio" name="gen" value="m"/>
                    Female<input type="radio" name="gen" value="f"/>	
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Choose Your hobbies</td>
                        <Td>
                        Reading<input value="reading" type="checkbox" name="hob[]"/>
                        Singing<input value="singin" type="checkbox" name="hob[]"/>
                        
                        Playing<input value="playing" type="checkbox" name="hob[]"/>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>Upload  Your Image </td>
                        <Td><input type="file" name="img" class="form-control" required/></td>
                    </tr>
                    
                    <tr>
                        <td>Enter Your DOB</td>
                        <Td>
                        <select style="width:100px;float:left" name="yy" class="form-control" required>
                        <option value="">Year</option>
                        <option>1950</option><option>1951</option><option>1952</option><option>1953</option><option>1954</option><option>1955</option><option>1956</option><option>1957</option><option>1958</option><option>1959</option><option>1960</option><option>1961</option><option>1962</option><option>1963</option><option>1964</option><option>1965</option><option>1966</option><option>1967</option><option>1968</option><option>1969</option><option>1970</option><option>1971</option><option>1972</option><option>1973</option><option>1974</option><option>1975</option><option>1976</option><option>1977</option><option>1978</option><option>1979</option><option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option>					
                        </select>
                        
                        <select style="width:100px;float:left" name="mm" class="form-control" required>
                        <option value="">Month</option>
                        <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>					
                        </select>
                        
                         
                        <select style="width:100px;float:left" name="dd" class="form-control" required>
                        <option value="">Date</option>
                        <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>					
                        </select>
                        
                        </td>
                    </tr>
                    
                    <tr>
                        
                        
    <Td colspan="2" align="center">
    <input type="submit" value="Save" class="btn btn-info" name="save"/>
    <input type="reset" value="Reset" class="btn btn-info"/>
                    
                        </td>
                    </tr>
                </table>
            </form>
    </center>
            </div>

    
</body>
  
</html>
</body>
</html>