<?php include('admin_header.php');?>
<?php 

include '../controller/MyController.php';
$obj = new MyController();
if(isset($_POST['submit']))
{  
    $reg_no         = $_POST['reg_no'];
    $s_name         = $_POST['s_name'];
    $dpt_name       = $_POST['dpt_name'];
    $email          = $_POST['email'];
    $mobile         = $_POST['mobile'];
    $address        = $_POST['address'];
    $dob            = $_POST['dob'];
    $obj->admin_stud_update($reg_no,$s_name,$dpt_name,$email,$mobile,$address,$dob);
}
?> 


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
                                require '../config/connection.php';
		                        $var=$_GET['id'];
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
                            
                        </div>
                        <div class="login-form">
                            <form  method="post">
                            <div class="form-group">
                                    <label>Register No</label>
                                    <input class="au-input au-input--full" type="text" name="reg_no" placeholder="Register No" value="<?php echo $row['reg_no'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Student Name</label>
                                    <input class="au-input au-input--full" type="text" name="s_name" placeholder="student Name" value="<?php echo $row['s_name'];?>">
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
                                <a href="admin_home.php" ><button class="au-btn au-btn--block au-btn--blue m-b-20 " > Cancel</button></a>
                                </div>
                                
                                </div>
                                <?php
                                }
                                ?>
                            </form>
                            
                        </div>
                    </div>
                </div>




<?php include('admin_footer.php');?>