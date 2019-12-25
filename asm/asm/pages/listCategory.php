<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
</head>

<body>
<div id="container">
        <?php require_once("../blocks/header.php"); ?>
        
        <?php require_once("../blocks/menu.php"); ?>

        
        
		<div id="content">

		<!-- require content here -->
        <button><a href="http://localhost/ASM/asm/pages/addCategory.php">Add New Category</a></button>
<table border="1px" class="w3-table-all">
    <thead>
        <tr>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <?php 
    require_once '../database.php';
            $sql = "Select * from tblcategory";
            $rows = query($sql);
            for($i=0; $i<count($rows); $i++)
            {
            ?>
                <div>
                    <tr>
                        <td><?= $rows[$i][1] ?></td>
                        <td><a href="http://localhost/ASM/asm/pages/updateCategory.php?id=<?= $rows[$i][0] ?>">Edit</a></td>
                        <td><a href="http://localhost/ASM/asm/function.php?id_cat=<?= $rows[$i][0] ?>" name="delete" onclick="myFunction()">Delete</a></td>
                        <div class="clear-both"></div>  
                    </tr>
                </div>
        <?php 
            }
    ?>
</table>

<p>&nbsp;</p>
        </div>

<?php require_once("../blocks/footer.php"); ?>

<script>
    function myFunction(){
        alert("Are you sure to delete?");
    }
</script>
