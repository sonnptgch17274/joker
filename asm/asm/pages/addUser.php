<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style.css" />

</head>

<body>
<div id="container">
        <?php require_once("../blocks/header.php"); ?>

        <?php require_once("../blocks/menu.php"); ?>
        
        
		<div id="content">
        

		<!-- require content here -->
		<h2>ADD NEW ACCOUNT</h2>
		<form action="" method="POST">
		<table width="50%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
            </tr>
            
            <tr>
				<td>Phone</td>
				<td><input type="text" name="phone"></td>
            </tr>

            <tr>
				<td>Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>

			<tr>
				<td>ID Role</td>
				<td>
					<select name="id_role">
						<option value="Admin">Admin</option>
						<option value="Trainer">Trainer</option>
                        <option value="Trainee">Trainee</option>
					</select>
				</td>
			</tr>
			<tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
		</form>

<p>&nbsp;</p>
        </div>

<?php
require_once '../database.php';
$connect = mysqli_connect($hostname, $username, $password, $dbname);
				
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
	$address = $_POST["address"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password = password_hash($password, PASSWORD_DEFAULT);
	$id_role = $_POST["id_role"];
    if ($name ==""||$email ==""||$phone == ""||$address == ""||$username == ""|| $password == ""|| $id_role == "") 
    {
        echo "Please fill the blank!";
    }

    else{
        $sql = "INSERT INTO tbluser VALUES (null, '$name','$email','$phone', '$address', '$username', '$password', '$id_role')";
        mysqli_query($connect,$sql);
        echo $sql;
    }
    if ($sql == true){
        header("location: listUser.php");
    }

}


?>

<?php require_once("../blocks/footer.php"); ?>