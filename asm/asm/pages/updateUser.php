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
    $sql = "SELECT * FROM tbluser WHERE iduser=" .$id;
    $rows = query($sql);
    for($i=0; $i<count($rows); $i++)
    {
    ?>
        <div>
        <tr>
                    <td>Name</td>
                    <td><input type="text" value="<?= $rows[$i][1] ?>" name="name" ></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="text" value="<?= $rows[$i][2] ?>" name="email" ></td>
                </tr>
                
                <tr>
                    <td>Phone</td>
                    <td><input type="text" value="<?= $rows[$i][3] ?>" name="phone"></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><input type="text" value="<?= $rows[$i][4] ?>" name="address"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" value="<?= $rows[$i][5] ?>" name="username"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="text" value="<?= $rows[$i][6] ?>" name="password"></td>
                </tr>

                <tr>
                    <td>Role</td>
                    <td>
                        <select value="<?= $rows[$i][7] ?>" name="id_role" >
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
            
        </div>
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
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $id_role = $_POST["id_role"];

            if ($name=="" ||$email=="" ||$phone=="" ||$address=="" ||$username=="" ||$password=="" ||$id_role=="") 
                {
                    echo "Please fill the blank!";
                }
            else
                {
                    $sql = "select * from tbluser where iduser= '$id'";
                    $sql = "UPDATE tbluser SET Name='$name',Email='$email',Phone='$phone',Address='$address',username='$username', password='$password', Role='$id_role' WHERE iduser=" . $id;
                    echo $sql;
                    mysqli_query($connect,$sql);
                }
            if ($sql == true){
                header("location: listUser.php");
            }
        }
?>






    


<?php require_once("../blocks/footer.php"); ?>