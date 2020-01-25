<?php include('student_header.php');?>


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
                        <th>Faculty Id</th>
                        <th>Faculty Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        
                        
                        
                        
                    </tr>
                </thead>
                <tbody>
                <?php 
                    require '../config/connection.php';
                    $var = $_GET['id'];
                    $sql = "SELECT * from faculty WHERE department='".$var."'";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
						           ?>
                       <form method="post">
                    <tr>
                        <td><input type="text" name="fac_id" value="<?php echo $row['fac_id'];?>"></td>
                        
                        
                        <td><?php echo $row['fac_name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['mobile'];?></td>
                        
                        
                    </tr> 
                    <?php 
					            }
                      ?> 
                    
                                              
                </tbody>
              </table>
            </div>
</div>
</body>




<?php include('student_footer.php');?>