<?php include('student_header.php');?>


<div class="container">
    <div class="row m-t-30">
         <div class="col-md-12">
            <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
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
                            <td>
                            
                            
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