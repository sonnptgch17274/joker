
<?php

 require("share_role.php");
 if (!isset($_SESSION['currUser'])) {
 	header("location:login.php");
 }
 else{
 if(!isset($_SESSION['currAdmin'])){
	header("location:index.php");
 } else{
	
	echo "<p style='color:Black; font-family: cursive, serif ; font-size:12pt; '>" ."Welcome! ". $_SESSION['currUser'] . "</p>";
	//echo "<p style='color:red;'>" . $ip['countryName'] . "</p>";
 	echo "<a style='color:Black; font-family: cursive, serif ; font-size:13pt;text-decoration: underline;' href='../login.php'>Log out</a>";
 }
}
 ?>