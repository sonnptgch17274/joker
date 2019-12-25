
<?php

 require("share_role.php");
 if (!isset($_SESSION['currUser'])) {
 	header("location:login.php");
 }
 else{
 if(!isset($_SESSION['currAdmin'])){
	header("location:index.php");
 } else{
	echo "Welcome administrator,";
 	echo "<a href='http://localhost/ASM/asm/login.php'>Logout</a>";
 }
}
 ?>