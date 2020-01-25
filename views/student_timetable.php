<?php include('student_header.php');?>

<div class="container">
            
            <div class="row m-t-30">
             
                 <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <br>
                    <br>
                    <br>
                    <?php 
                                require '../config/connection.php';
                                $sem = $_GET['id'];
                                $var =$_SESSION['stud_dept'];
                                $sql = "SELECT * from timetable where department = '".$var."' and semester = '".$sem."'";
                                $result = mysqli_query($conn,$sql);
                                if($row = mysqli_fetch_assoc($result))
                                {
                                    
                                               ?>
                                               <h3>Timetable/Semester-<?php echo $row['semester']?> </h3>
                                               <?php
                                }
                                ?>
                                   
                        <div class="table-responsive m-b-40">
                        <br>
                        
                          <table class="table table-borderless table-data3">
                            <thead>
                                 <tr>
                                    <th>Day</th>
                                    <th>Subject 1</th>
                                    <th>Subject 2</th>
                                    <th>Subject 3</th>
                                    <th>Subject 4</th>
                                    
                                     
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                require '../config/connection.php';
                                $sem = $_GET['id'];
                                $var =$_SESSION['stud_dept'];
                                $sql = "SELECT * from timetable where department = '".$var."' and semester = '".$sem."'";
                                $result = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($result))
                                {
                                               ?>
                                   
                                <tr>
                                    <td><?php echo $row['day'];?></td>
                                    <td><?php echo $row['h1'];?></td>
                                    <td><?php echo $row['h2'];?></td>
                                    <td><?php echo $row['h3'];?></td>
                                    <td><?php echo $row['h4'];?></td>
                                   
                                    
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