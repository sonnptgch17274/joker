<?php require_once "../blocks/headerTrainer.php"; ?>
       <!-- about_area_start -->
       <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<h2 data-aos="fade-left">LIST TOPIC</h2>
				<h3><a href="addTopic.php">Click to Add Topic</a></h3>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column2">Title</th>
								<th class="column2">Description</th>
								<th class="column2">Deadline</th>
                                <th class="column2">Edit</th>
                                <th class="column2">Delete</th>
							</tr>
						</thead>
                               <!-- require php -->
                               <?php
require_once '../database.php';
$connect = mysqli_connect($hostname, $username, $password, $dbname);

    if(isset($_GET['id'])){
    $id = $_GET["id"];
    }
    $sql = "SELECT * FROM tbltopic WHERE ID_Course=" .$id;
    $rows = query($sql);
    for($i=0; $i<count($rows); $i++)
    {
    ?>
    <div>
        <tr>
            <th> <?= $rows[$i][1] ?> </th>
            <th> <?= $rows[$i][2] ?> </th>
            <th> <?= $rows[$i][3] ?> </th> 
            <th><a href="http://localhost/ASM/asm/trainer/updateTopic.php?id=<?= $rows[$i][0] ?>">Edit</a></th>
            <th><a href="http://localhost/ASM/asm/function.php?idtopic=<?= $rows[$i][0] ?>" name="delete" onclick="myFunction()">Delete</a></th>
        </tr>
    </div>
<?php }
?>
		</table>
		</form>
		



    <script>
    function myFunction(){
        alert("Are you sure to delete?");
    }
    </script> 
 
                        </table>
				</div>
			</div>
		</div>
	</div>
    <?php require_once "../blocks/footer.php"; ?>