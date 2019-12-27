<?php require_once "../blocks/header.php"; ?>
       <!-- about_area_start -->
       <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<h2 data-aos="fade-left">LIST CATEGORY</h2>
				<h3><a href="addCategory.php">Click to Add Category</a></h3>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column2">Category</th>
                                <th class="column2">Edit</th>
                                <th class="column2">Delete</th>
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
    ?> <!-- require php -->
 
                        </table>
				</div>
			</div>
		</div>
	</div>
    <?php require_once "../blocks/footer.php"; ?>
    <script>
    function myFunction(){
        alert("Are you sure to delete?");
    }
    </script> 