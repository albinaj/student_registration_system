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
            <br>
            <br>
      
            

           
            <h3>Notice Board</h3>
            <br>
            
              <table class="table table-borderless table-data3">
                <thead>
                     <tr>
                        <th>Notice Id</th>
                        <th>Title</th>
                        <th>Beginning date</th>
                        <th>Author</th>
                        <th>Ending date</th>
                        <th>Description</th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php 
					          require '../config/connection.php';
                    $sql = "select * from notices";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
						           ?>
                       <form method="post">
                    <tr>
                        <td><input type="text" name="Notice_Id" value="<?php echo $row['Notice_Id'];?>"></td>
                        <td><?php echo $row['Title'];?></td>
                        <td><?php echo $row['Beginning_date'];?></td>
                        <td><?php echo $row['Author'];?></td>
                        <td><?php echo $row['Ending_date'];?></td>
                        <td><?php echo $row['Description'];?></td>
                        </form>
                        <td><a href="../views/admin_fac_profile.php?id=<?php echo $row['fac_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">Edit/Update</a></td>
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