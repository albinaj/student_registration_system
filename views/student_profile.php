<?php include('student_header.php');?>

<body class="animsition">
<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                    <div class="row">
                        <div class="col-md-3">
                            </div>
                        <div class="login-logo col-md-3">
                            <a href="#">
                            <i class="fa fa-user fa-8x" aria-hidden="true"></i>
                            <br>
                            <?php
                                require_once '../config/connection.php';
		                        $var = $_SESSION['reg_no'];
                                $sql="SELECT * from student where reg_no='".$var."'";
                                
		                        $result=mysqli_query($conn,$sql);
		                        while($row=mysqli_fetch_assoc($result))
		                            {
			                             ?> 	
                            <h3><?php echo $row['s_name'];?></h3>
                            </a>
                        </div>
                        <div class="col-md-3">
                            </div>
                            <div class="col-md-3">
                            <br>
                            <br>
                            <br>
                            <a href="student_edit_profile.php?id=<?php echo $row['reg_no'];?>"><button class="btn btn-primary">Edit Profile</button></a>
                            </div>
                        </div>
                        <div class="login-form">
                            <form  method="post">
                                <div class="form-group">
                                    <label>Student Name</label>
                                    <input class="au-input au-input--full" type="text" name="s_name" placeholder="Student Name" value="<?php echo $row['s_name'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <input class="au-input au-input--full" type="text" name="dpt_name" placeholder="Department" value="<?php echo $row['department'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="text" name="email" placeholder="Email" value="<?php echo $row['email'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input class="au-input au-input--full" type="text" name="mobile" placeholder="Mobile" value="<?php echo $row['mobile'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="au-input au-input--full" type="text" name="address" placeholder="Address" value="<?php echo $row['address'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input class="au-input au-input--full" type="date" name="dob" placeholder="Date Of Birth" value="<?php echo $row['dob'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input class="au-input au-input--full" type="text" name="gender" placeholder="Gender" value="<?php echo $row['gender'];?>" readonly>
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




<?php include('student_footer.php');?>