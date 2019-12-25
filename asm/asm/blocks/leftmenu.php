<div id="leftmenu">
    <div id="leftmenu_main">    
    <h3>Category</h3>
                
    <ul>
    <?php  
    require_once '../database.php';
            $sql = "Select * from tblcategory";
            $rows = query($sql);
            for($i=0; $i<count($rows); $i++)
            {
                ?>
                <div>
                    <tr>
                    <li><a href="http://localhost/ASM/asm/trainee/viewCourse.php?id=<?= $rows[$i][0] ?>"><?= $rows[$i][1] ?></a></li>
                    </tr>
                </div>
        <?php 
            }
    ?>
        
    </ul>
        </div>
</div>
        
        

</div>