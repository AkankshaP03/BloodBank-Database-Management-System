<?php 
    session_start();
    $con= mysqli_connect("localhost","root","","blooddonation");
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Request Blood</title>
	<link rel="stylesheet" type="text/css" href="css/RequestBlood.css">
</head>
<body>
	<header>
	<div class="main">
 	<ul>
 	<li><a href="SeekerPage.html">Seeker Details</a></li>
 		<li><a href="SDonor.php">Search Donor</a></li>
 		<li><a href="SDStatus.php">Search Donor Status</a></li>
 		<li class="active"><a href="SeekerRB.php">Request Blood</a></li>
 		<li><a href="RBStatus.php">Request Blood Status</a></li>
 		<li><a href="Logout.php">Logout</a></li>
 		<li><a href="ContactPage.html">Contact</a></li>
 	</ul>
 </div><br>
 <div class="container">
 	<h2>Requesting For Blood</h2><br>
 	<br>
 	<form  method="POST">
		<div class="form_input">
			<input type="text"  name="nam" placeholder="Paitent Name..." required><br>
			<input type="text"  name="hid" placeholder="Hospital ID..." required><br><br>
             <select name="bt"> 
               <option   value="">Blood Type..</option>
		       <option   value="O+ve">O+ve</option>
		       <option   value="O-ve">O-ve</option>
		       <option   value="A+ve">A+ve</option>
		       <option   value="A-ve">A-ve</option>
		       <option   value="B+ve">B+ve</option>
		       <option   value="B-ve">B-ve</option>
		       <option   value="AB+ve">AB+ve</option>
		       <option   value="AB-ve">AB-ve</option>
              </select><br><br>
			<select name="city"> 
               <option   value="">City...</option>
               <option   value="Agra">Agra</option>
		       <option   value="Ahemdabad">Ahemdabad</option>
		       <option   value="Amaravati">Amaravati</option>
		       <option   value="Amritsar">Amritsar</option>
		       <option   value="Bangalore">Bangalore</option>
               <option   value="Banaris">Banaris</option>
		       <option   value="Bilaspur">Bilaspur</option>
               <option   value="Bhopal">Bhopal</option> 
               <option   value="Bhubaneshwar">Bhubaneshwar</option>
		       <option   value="Chennai">Chennai</option>
		       <option   value="Chandigarh">Chandigarh</option>
		       <option   value="Delhi">Delhi</option>
               <option   value="Guwahati">Guwahati</option>
		       <option   value="Gurgaon">Gurgaon</option>
		       <option   value="Gangtok">Gangtok</option>
               <option   value="Hyderabad">Hyderabad</option>
		       <option   value="Indore">Indore</option>
		       <option   value="Jaipur">Jaipur</option>
		       <option   value="Kochi">Kochi</option>
		       <option   value="Kolkata">Kolkata</option>
		       <option   value="Kanpur">Kanpur</option>
		       <option   value="Lucknow">Lucknow</option>
		       <option   value="Mangaluru">Mangaluru</option>
		       <option   value="Mumbai">Mumbai</option>
		       <option   value="Patna">Patna</option>
		       <option   value="Panaji">Panaji</option>
		       <option   value="Pune">Pune</option>
		       <option   value="Ranchi">Ranchi</option>
		       <option   value="Srinagar">Srinagar</option>
		       <option   value="Salem">Salem</option>
		       <option   value="Thiruvananthapuram">Thiruvananthapuram</option>
		       <option   value="Udaipur">Udaipur</option>
               </select><br><br>
			Requirement Date:<br>
			<input type="date"  name="dat"  required><br>
			<input type="text" name="cn" placeholder="Contact Number..." required><br>
			<input type="text" name="add" placeholder="Address..." required><br>
			<input type="submit"  name="sub" value="Submit" ><br><br>
		</div>
	</form>
    <?php
    $id=$_SESSION['id'];
$hd=$_POST['hid'];
$rname=$_POST['nam'];
$blood=$_POST['bt'];
$da=$_POST['dat'];
$cty=$_POST['city'];
$conno=$_POST['cn'];
$ad=$_POST['add'];
if(isset($_SESSION['adminid']))
{
	if(isset($_POST['sub']))
	{

$sql="INSERT INTO reqblood (r_id,h_id,r_pname,r_bloodgroup,r_address,r_city,r_date,r_conno,r_status) VALUES('$id','$hd','$rname','$blood','$ad','$cty','$da','$conno','Pending')";
mysqli_query($con,$sql);
header('location:SeekerPage.php');
}
}

?>
 </div>
 </header>
</body>
</html>