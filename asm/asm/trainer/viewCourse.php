<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style.css" />

</head>

<body>
<div id="container">
        <?php require_once("../blocks/header1.php"); ?>
    <br>
    <br>
    <br>
        <?php require_once("../blocks/leftmenu1.php"); ?>
    

        
        
		<div id="content">

        

        <div id="content_main">

        <!-- require content here -->
        <button><a href="http://localhost/ASM/asm/trainer/addCourse.php">Add New Course</a></button>
		<form action="" method="POST">
		<table width="90%" border="1">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Description</th>
                    <th>Topic</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>        
    
    
    <?php
    require_once '../database.php';
    $connect = mysqli_connect($hostname, $username, $password, $dbname);
    
    if(isset($_GET['id'])){
    $id = $_GET["id"];
    }
    $sql = "SELECT * FROM tblcourse WHERE ID_Cat=" .$id;
    $rows = query($sql);
    for($i=0; $i<count($rows); $i++)
    {
    ?>
    <div>
        <tr>
            <th> <?= $rows[$i][1] ?> </th>
            <th> <?= $rows[$i][2] ?> </th>
            <th><a href="http://localhost/ASM/asm/trainer/viewTopic.php?id=<?= $rows[$i][0] ?>">View</a></th>
            <th><a href="http://localhost/ASM/asm/trainer/viewTopic.php?id=<?= $rows[$i][0] ?>">Edit</a></th>
            <th><a href="http://localhost/ASM/asm/function.php?idcourse=<?= $rows[$i][0] ?>" name="delete" onclick="myFunction()">Delete</a></th>
        </tr>
    </div>
<?php }
?>
		</table>
		</form>
		

<p>&nbsp;</p>
        </div>

    <script>
    function myFunction(){
        alert("Are you sure to delete?");
    }
    </script> 

<?php require_once("../blocks/footer.php"); ?>