
<?php

          $con= mysqli_connect("localhost","root","","blooddonation");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Donor</title>
	<link rel="stylesheet" type="text/css" href="css/SearchDonor.css">
</head>

<body>
	<header>
 <div class="main">
 	<ul>
 		<li><a href="HospitalLogin.html">Hospital Login</a></li>
 		<li class="active"><a href="SDonor.php">Search Donors</a></li>
 		<li><a href="DonorLogin.html">Donor Login</a></li>
 		<li><a href="SeekerLogin.html">Seeker Login</a></li>
 		<li><a href="index.html">Home</a></li>
 		<li><a href="ContactPage.html">Contact</a></li>
 	</ul>
 </div><br>
<div class="container">
     <h1>Search Donor</h1>
	<form  method="POST">
		<div class="form_input">
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
              </select>
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
               </select>
           <input name="sub"  type="submit" value="Submit" >
       </div>
       </div>
   </form>
   <?php
           	if(isset($_POST['sub']))
       {
         ?>
      
           <div class="container1">
           	<?php
           	 $q=mysqli_query($con,"SELECT * FROM `donor` WHERE d_bloodgroup LIKE '%$_POST[bt]%' AND d_city LIKE '%$_POST[city]%';");
          if(mysqli_num_rows($q)==0)
          {
            ?>
              <br>
              <h2 style="color: #fff; padding-left: 100px">No Matches Found...Try again later.</h2>
              <?php

          }
          else
          {
             echo "<table>";
             echo"<tr>";
              //table header--------------------
             echo "<th>"; echo "Donor ID";   echo "</th>";
             echo "<th>"; echo "Donor Name";   echo "</th>";
             echo "<th>"; echo "Blood-Group";   echo "</th>";
             echo "<th>"; echo "City";   echo "</th>";
             echo "<th>"; echo "Gender";   echo "</th>";
             echo "<th>"; echo "Address";   echo "</th>";
             echo "<th>"; echo "Contact Number";   echo "</th>";
             echo "<th>"; echo "E-mail ID";   echo "</th>";
             echo "</tr>"; 

             while($row=mysqli_fetch_assoc($q))
             {
               echo "<tr>";
               echo "<td>";  echo $row['d_id'];  echo "</td>";
               echo "<td>";  echo $row['d_name'];  echo "</td>";
               echo "<td>";  echo $row['d_bloodgroup'];  echo "</td>";
               echo "<td>";  echo $row['d_city'];  echo "</td>";
               echo "<td>";  echo $row['d_gender'];  echo "</td>";
               echo "<td>";  echo $row['d_address'];  echo "</td>";
               echo "<td>";  echo $row['d_conno'];  echo "</td>";
               echo "<td>";  echo $row['d_email'];  echo "</td>";
               echo "</tr>";
             }
             echo"<table>";
          }
       }
?>
         </div>    
	
</header>
</body>
</html>