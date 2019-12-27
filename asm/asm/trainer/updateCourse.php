<?php require_once "../blocks/headerTrainer.php"; ?>
       <!-- about_area_start -->
       <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<h2 data-aos="fade-left">LIST TEACHER</h2>
				<h3><a href="addteacher.php">Click to Add Account Teacher Or Student</a></h3>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column2">Course Name</th>
								<th class="column2">Description</th>
							</tr>
						</thead>
                               <!-- require php -->
                               <form action="" method="POST">
		<table width="50%" border="0">
            
    <?php
    require_once '../database.php';
    $connect = mysqli_connect($hostname, $username, $password, $dbname);
    
    if(isset($_GET['id'])){
    $id = $_GET["id"];
    }
    $sql = "SELECT * FROM tblcourse WHERE ID_Course=" .$id;
    $rows = query($sql);
    for($i=0; $i<count($rows); $i++)
    {
    ?>
        <div>
            <tr>
                <td>Course Name</td>
                <td><input type="text" value="<?= $rows[$i][1] ?>" name="name" ></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" value="<?= $rows[$i][2] ?>" name="des" ></td>
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
            if ($name==""|| $des=="") 
                {
                    echo "Please fill the blank!";
                }
            else
                {
                    $sql = "select * from tblcourse where ID_Cat= '$id'";
                    $sql = "UPDATE tblcourse SET Course_Name='$name', Description='$des' WHERE ID_Course=" . $id;

                    mysqli_query($connect,$sql);
                }

        }
?>
 
                        </table>
				</div>
			</div>
		</div>
	</div>
    <?php require_once "../blocks/footer.php"; ?>