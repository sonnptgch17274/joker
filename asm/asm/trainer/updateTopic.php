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
        
        
		<div id="content"></div>
        <!-- require content here -->
		<form action="" method="POST">
		<table width="50%" border="0">
            
    <?php
    require_once '../database.php';
    $connect = mysqli_connect($hostname, $username, $password, $dbname);
    
    if(isset($_GET['id'])){
    $id = $_GET["id"];
    }
    $sql = "SELECT * FROM tbltopic WHERE ID_Topic=" .$id;
    $rows = query($sql);
    for($i=0; $i<count($rows); $i++)
    {
    ?>
        <div>
            <tr>
                <td>Title</td>
                <td><input type="text" value="<?= $rows[$i][1] ?>" name="name" ></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" value="<?= $rows[$i][2] ?>" name="des" ></td>
            </tr>
            <tr>
                <td>Deadline</td>
                <td><input type="text" value="<?= $rows[$i][3] ?>" name="date" ></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
            <?php }
?>
		</table>
		</form>

<?php 
require_once '../database.php';
$connect = mysqli_connect($hostname, $username, $password, $dbname);


    if(isset($_POST["submit"]))
        {
            $name = $_POST["name"];
            $des = $_POST["des"];
            $date = $_POST["date"];
            if ($name ==""||$des ==""||$date=="") 
                {
                    echo "Please fill the blank!";
                }
            else
                {
                    $sql = "select * from tbltopic where ID_Course= '$id'";
                    $sql = "UPDATE tblcourse SET Title='$name', Description='$des', Deadline='$date', WHERE ID_Topic=" . $id;
                    echo $sql;
                    mysqli_query($connect,$sql);
                }
            if ($sql == true){
                header("location: index.php");
            }
        }
?>


<?php require_once("../blocks/footer.php"); ?>