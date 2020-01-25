<?php include('admin_header.php');?>
<div class="row container">

<div class="col-md-6">
<br>
<br>
<br>
<br>
<?php 
                    require '../config/connection.php';
                    $var = $_GET['id'];
                    $sql = "SELECT * from department WHERE department='".$var."'";
                    $result = mysqli_query($conn,$sql);
                    if($row = mysqli_fetch_assoc($result))
                    {
						           ?>
                <h4> Department/<?php echo $row['department'];?> </h4>
                
                    </div>
                    <div class="col-md-6">
                    <br>
<br>
<br>
<br>
<a class="btn btn-primary" href="admin_add_semester.php?id=<?php $row['department'];?>">Add Semester</a>
<?php
                    }
                    ?>
                    </div>
                </div>

<div class="container">
<div class="row m-t-30">
     <div class="col-md-12">
        <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
            
              <table class="table table-borderless table-data3">
                <thead>
                     <tr>
                        <th>sl No</th>
                        <th>Semester</th>
                        <th>Sub 1</th>
                        <th>Sub 2</th>
                        <th>Sub 3</th>
                        <th>Sub 4</th>
                        
                        
                        <th></th> 
                    </tr>
                </thead>
                <tbody>
                <?php 
                    require '../config/connection.php';
                    $var = $_GET['id'];
                    $sql = "SELECT * from department WHERE department='".$var."'";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
						           ?>
                       <form method="post">
                    <tr>
                        <td><input type="text" name="dept_id" value="<?php echo $row['dept_id'];?>"></td>
                        
                        
                        <td><?php echo $row['semester'];?></td>
                        <td><?php echo $row['sub1'];?></td>
                        <td><?php echo $row['sub2'];?></td>
                        <td><?php echo $row['sub3'];?></td>
                        <td><?php echo $row['sub4'];?></td>
                        
                        <td><a href="../views/admin_edit_semester.php?id=<?php echo $row['department']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">Edit/Update</a></td>
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