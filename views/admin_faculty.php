<?php include('admin_header.php');?>

<?php 

    include '../controller/MyController.php';
    $obj = new MyController();
    if(isset($_POST['submit']))
    {  
        $fac_id         = $_POST['fac_id'];
        $obj->fac_approve($fac_id);
    }
?> 
<body>
    
    
<div class="container">
<div class="row m-t-30">
     <div class="col-md-12">
        <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
            <br>
            <br>
              <table class="table table-borderless table-data3">
                <thead>
                     <tr>
                        <th>Faculty Id</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th></th>
                        <th></th> 
                    </tr>
                </thead>
                <tbody>
                <?php 
					          require '../config/connection.php';
                    $sql = "select * from faculty";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
						           ?>
                       <form method="post">
                    <tr>
                        <td><input type="text" name="fac_id" value="<?php echo $row['fac_id'];?>"></td>
                        <td><?php echo $row['fac_name'];?></td>
                        <td><?php echo $row['department'];?></td>
                        <td><?php echo $row['status'];?></td>
                        <td>
                        
                            <input type="submit" class="btn btn-outline-secondary  btn-arrow-right" role="button" value="Approve" name="submit">
                        </form>
                        </td>
                        <td><a href="../views/admin_fac_profile.php?id=<?php echo $row['fac_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">View Profile</a></td>
                    </tr> 
                    <?php 
					            }
                      ?> 
                    
                                              
                </tbody>
              </table>
            </div>
</div>
</body>

<?php include('admin_footer.php');?>