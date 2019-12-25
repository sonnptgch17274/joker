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
		<h2>ADD CATEGORY</h2>
                    <form action="" method="POST">
                    <table width="50%" border="0">
            <tr>
                <td>ID</td>
                <td><input type="num" name="id"></td>
            </tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
            </tr>
            
			<tr>
				<td></td>
				<td><input type="submit" name="submit3"></td>
			</tr>
		</table>
		</form>

<p>&nbsp;</p>
        </div>
		<?php 

require_once '../database.php';
$connect = mysqli_connect($hostname, $username, $password, $dbname);
				
if(isset($_POST["submit3"]))
{
    $id = $_POST["id"];
    $name = $_POST["name"];
    if ($name =="") 
    {
        echo "Please fill the blank!";
    }
    else{
        $sql = "INSERT INTO tblcategory VALUES ('$id', '$name')";
        mysqli_query($connect,$sql);
        echo $sql;
    }
    if ($sql == true){
        header("location: listCategory.php");
    }
}
?>

<?php require_once("../blocks/footer.php"); ?>