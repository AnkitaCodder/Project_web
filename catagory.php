<?php

session_start();

// include_once 'conn.php';

$con = mysqli_connect("localhost","root","","mess_demo");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM property";
$result = mysqli_query($con, $sql);

// Associative array
$row = mysqli_fetch_assoc($result);
printf ("%s (%s)\n", $row["id"], $row["name"], $row["Image"], $row["Type"]);

// Free result set
mysqli_free_result($result);

mysqli_close($con);

// $sql = "SELECT * FROM property where id,name,Type,Accomodation,available_for,Price,Location,Amenities,Image";
// $result = mysqli_query($conn, $sql);

// if($result->num_row > 0){
// 	echo "<table><tr><th>id</th><th>name</th><th>Type</th><th>Accomodation</th><th>Available For</th><th>Price</th><th>Location</th><th>Amenities</th><th>Image</th>";
// 	//output data of each row
// 	while($row = $result->fetch_assoc()){
// 		echo "<tr><td>" .$row["id"]. "</td><td>" .$row["name"]. "</td><td>" .$row["Type"]. "</td><td>" .$row["Accomodation"]. "</td><td>" .$row["available_for"]. "</td><td>" .$row["Price"]. "</td><td>" .$row["Location"]. "</td><td>" .$row["Amenities"]. "</td><td>";
// 			}
// 		echo "</table>";
// }
// 		else{
// 			echo "0 result";
// 		}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<title>Categories</title>
	<link rel="stylesheet" type="text/css" href="catagory ca.css">
	<link href="css/hover.css" rel="stylesheet" media="all">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
</head>
<body>

	 <div class="header">
	 	<nav>
	 		  <ul class="nav_links">
	 			<li><a href="index.php" class="hvr-shutter-in-horizontal">Home</a></li>
	 			<li><a href="find.php" class="hvr-shutter-in-horizontal">Find</a></li>
	 			<li><a href="#" class="hvr-shutter-in-horizontal">Contact</a></li>
	 			<li><a href="#" class="hvr-shutter-in-horizontal">About Us</a></li>
	 		</ul>
	 	</nav>
	 </div>
           
	<div class="container">
		<div class="list-container">
			<div class="left-col">
				<p>200+ options</p>
				<h1>Recommanded places are</h1>
				<div class="house">
					<div class="house-img">
						<img src="image/flat.jpg">
					</div>
                     <div class="house-info">
                     	<p>for rent Near Raghavpur more</p>
                     	<h3>2BHK/3BHK</h3>
                     	<h3>wifi/ fooddelivery service/available water</h3>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas  fa-star-half-alt"></i>
                     	<i class="far fa-star"></i>
                     	<div class="house-price">
                     		<h4>8000\- <span>per month</span></h4>
                     	</div>
                     <div class="button">
                     	<a href="">Contact Owner</a>
                     </div>
                  </div>
               </div>
                     <div class="house">
					      <div class="house-img">
						<img src="image/nirmala pg.jpg">
					</div>
                     <div class="house-info">
                     	<p>Pg near Santamayee school</p>
                     	<h3>2 bed/4bed per room</h3>
                     	<h3>wifi/ fooddelivery service/available water</h3>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas  fa-star-half-alt"></i>
                     	<i class="far fa-star"></i>
                     	<div class="house-price">
                     		<h4>3000\- <span>per month</span></h4>
                     	</div>
                     	<div class="button">
                     	<a href="">Contact Owner</a>
                     </div>
                     </div>
                 </div>
                 <div class="house">
					      <div class="house-img">
						<img src="image/hudco.jpeg">
					</div>
                     <div class="house-info">
                     	<p>for rent Near Raja bandh</p>
                     	<h3>2BHK/3BHK/4BHK apparment</h3>
                     	<h3>wifi/ fooddelivery service/available water<br>1000sqft</br></h3>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas  fa-star-half-alt"></i>
                     	<i class="far fa-star"></i>
                     	<div class="house-price">
                     		<h4>10,000\- <span>per month</span></h4>
                     	</div>
                     	<div class="button">
                     	<a href="">Contact Owner</a>
                     </div>
                     </div>
                 </div>
                 <div class="house">
					<div class="house-img">
						<img src="image/room.jpg">
					</div>
                     <div class="house-info">
                     	<p>for rent Near Gosala more</p>
                     	<h3>100sqft</h3>
                     	<h3>wifi/ fooddelivery service/available water</h3>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas  fa-star-half-alt"></i>
                     	<i class="far fa-star"></i>
                     	<div class="house-price">
                     		<h4>8000\- <span>per month</span></h4>
                     	</div>
                     	<div class="button">
                     	<a href="">Contact Owner</a>
                     </div>
                     </div>
                 </div>
                 <div class="house">
					<div class="house-img">
						<img src="image/mess.jpg">
					</div>
                     <div class="house-info">
                     	<p>for rent Near Nistarini College<br>Gitanjali Mess</p>
                     	<h3>3bed/4bed per room<h3>
                     	<h3>wifi/ fooddelivery service/available water</h3>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas  fa-star-half-alt"></i>
                     	<i class="far fa-star"></i>
                     	<div class="house-price">
                     		<h4>2500\-<span>per month</span></h4>
                     	</div>
                     	<div class="button">
                     	<a href="">Contact Owner</a>
                     </div>
                     </div>
                 </div>
                  <div class="house">
					<div class="house-img">
						<img src="image/jd apartment.jpg">
					</div>
                     <div class="house-info">
                     	<p>for rent Near Jiosmart<br>JD appartment</p>
                     	<h3>2BHK/3BHK</h3>
                     	<h3>wifi/ fooddelivery service/available water</h3>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas fa-star"></i>
                     	<i class="fas  fa-star-half-alt"></i>
                     	<i class="far fa-star"></i>
                     	<div class="house-price">
                     		<h4>8000\- <span>per month</span></h4>
                     	</div>
                     	<div class="button">
                     	<a href="">Contact Owner</a>
                     </div>
                     </div>
                 </div>
                     <div class="sidebar-link">
                	<a href="#">View More</a>
                </div>
		    </div>
			<div class="right-col">
				<div class="sidebar">
					<h2>Select Filters</h2>
					<h3>Property type</h3>
					<div class="filter">
						<input type="checkbox"><p>House</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>Flat</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>Mess</p><span>(0)</span>
					</div>
					<h3>Budget</h3>
					<div class="filter">
						<input type="checkbox"><p>2000\-to 4000\-</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>5000\-to 8000\-</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>8000\- above</p><span>(0)</span>
					</div>
					<h3>Location</h3>
					<div class="filter">
						<input type="checkbox"><p>Near Nistarini college</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>Saheb bandh</p><span>(0)</span>
					</div>
					<h3>Available For</h3>
					<div class="filter">
						<input type="checkbox"><p>Only Man</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>Only Woman</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>Family</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>For work</p><span>(0)</span>
					</div>
					<h3>Amenities</h3>
					<div class="filter">
						<input type="checkbox"><p>park</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>Power Backup</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>Lift</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>Security</p><span>(0)</span>
					</div>
					<div class="filter">
						<input type="checkbox"><p>Air conditioner</p><span>(0)</span>
					</div>

                </div>
                
			
		
	</div>
</body>
		