<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style.css" />

</head>

<body>
<div id="container">
        <?php require_once("../blocks/header.php"); ?>
<br>
<br>
<br>
        <?php require_once("../blocks/leftmenu1.php"); ?>
        
        
		<div id="content">
        

		<!-- require content here -->
		<h2>ADD NEW COURSE</h2>
		<form action="" method="POST">
		<table width="50%" border="0">
			<tr>
				<td>Course Name</td>
				<td><input type="text" name="name"></td>
			</tr>

			<tr>
				<td>Description</td>
				<td><input type="text" name="des"></td>
            </tr>

			<tr>
                <td>ID Cat</td>
                <td>
    <?php
    require_once '../database.php';
    $connect = mysqli_connect($hostname, $username, $password, $dbname);
    
    $sql = "SELECT * FROM tblcategory";
    $rows = query($sql);

    ?>
    <div>
        <tr>
            <th> 
                <select type="num" name="id_cat">
                    <?php
                    for($i=0; $i<count($rows); $i++)
                    { ?>
                    <option value="<?= $rows[$i][0] ?>"><?= $rows[$i][1] ?></option>
                    <?php
                } 
                ?>
                </select>
            </th>
        </tr>
    </div>
					
				</td>

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
$connect = mysqli_connect($hostname, $username, $password, $dbname)or die("Unable to connect to");
				
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $des = $_POST["des"];
    $id_cat = $_POST["id_cat"];
    if ($name ==""||$des ==""||$id_cat == "") 
    {
        echo "Please fill the blank!";
    }

    else{
        $sql = "INSERT INTO tblcourse(ID_Course, Course_Name, Description, ID_Cat) VALUES (null, '$name','$des',$id_cat)";
        mysqli_query($connect,$sql) or die("Unable to connect");

    }

    


}


?>

<?php require_once("../blocks/footer.php"); ?>