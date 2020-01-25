<?php include('admin_header.php');?>

<div class="container">
<div class="row m-t-30">
     <div class="col-md-12">
     <h2>All Students</h2>
        <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
            
           
            <br>
            
              <table class="table table-borderless table-data3">
                <thead>
                     <tr>
                        <th>Reg No</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        
                        <th></th> 
                    </tr>
                </thead>
                <tbody>
                <?php 
                   
				    require '../config/connection.php';
                            
                            $sql = "SELECT * from student";
                            $result = mysqli_query($conn,$sql);
                            while($row1 = mysqli_fetch_assoc($result))
                                {
						            ?>
                       <form method="post">
                    <tr>
                        <td><?php echo $row1['reg_no'];?></td>
                        <td><?php echo $row1['s_name'];?></td>
                        <td><?php echo $row1['department'];?></td>
                        <td><?php echo $row1['email'];?></td>
                        <td><?php echo $row1['mobile'];?></td>
                        
                        <td><a href="../views/admin_stud_profile.php?id1=<?php echo $row1['reg_no'];?> " class="btn btn-outline-secondary  btn-arrow-right" role="button">View Profile</a></td>
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