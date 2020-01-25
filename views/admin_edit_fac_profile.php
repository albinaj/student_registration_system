<?php include('admin_header.php');?>




<body class="animsition">
<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                            <i class="fa fa-user fa-8x" aria-hidden="true"></i>
                            <br>
                            <?php
                                require '../config/connection.php';
		                        echo $var=$_GET['id'];
		                        $sql1="select * from faculty where fac_id='".$var."'";
		                        $result=mysqli_query($conn,$sql1);
		                        while($row=mysqli_fetch_assoc($result))
		                            {
			                             ?> 	
                            <h3><?php echo $row['fac_name'];?>
                            </a>
                        </div>
                        <div class="login-form">
                            <form  method="post">
                            <div class="form-group">
                                    <label>Faculty Id</label>
                                    <input class="au-input au-input--full" type="text" name="f_id" placeholder="Faculty Id" value="<?php echo $row['fac_id'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Faculty Name</label>
                                    <input class="au-input au-input--full" type="text" name="f_name" placeholder="Faculty Name" value="<?php echo $row['fac_name'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <input class="au-input au-input--full" type="text" name="dpt_name" placeholder="Department" value="<?php echo $row['department'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="text" name="email" placeholder="Email" value="<?php echo $row['email'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input class="au-input au-input--full" type="text" name="mobile" placeholder="Mobile" value="<?php echo $row['mobile'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="au-input au-input--full" type="text" name="address" placeholder="Address" value="<?php echo $row['address'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input class="au-input au-input--full" type="date" name="dob" placeholder="Date Of Birth" value="<?php echo $row['dob'];?>">
                                </div>
                                
                                
                            
                                
                                <div class="row">
                                <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 <input type="submit" class="au-btn au-btn--block au-btn--blue m-b-20" value="Update" name="submit">
                                 </div>
                                 
                                <div class="col-md-3">
                                <a href="index.php" ><button class="au-btn au-btn--block au-btn--blue m-b-20 " > Cancel</button></a>
                                </div>
                                
                                </div>
                                <?php
                                }
                                ?>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



<?php include('admin_footer.php');?>