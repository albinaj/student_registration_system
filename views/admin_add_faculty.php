<?php include('admin_header.php');

    include '../controller/MyController.php';
    $obj = new MyController();
    if(isset($_POST['submit']))
    {
        $f_name         = $_POST['f_name'];
        $dpt_name       = $_POST['dpt_name'];
        $email          = $_POST['email'];
        $mobile         = $_POST['mobile'];
        $address        = $_POST['address'];
        $dob            = $_POST['dob'];
        $gender         = $_POST['gender'];
        $pass           = $_POST['password'];
        $obj->Signup($f_name,$dpt_name,$email,$mobile,$address,$dob,$gender,$pass);
    }
?> 

<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                            <i class="fa fa-user fa-8x" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="login-form">
                            <form  method="post">
                                <div class="form-group">
                                    <label>Faculty Name</label>
                                    <input class="au-input au-input--full" type="text" name="f_name" placeholder="Faculty Name">
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <input class="au-input au-input--full" type="text" name="dpt_name" placeholder="Department">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="text" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input class="au-input au-input--full" type="text" name="mobile" placeholder="Mobile">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="au-input au-input--full" type="text" name="address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input class="au-input au-input--full" type="date" name="dob" placeholder="Date Of Birth">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input class="au-input au-input--full" type="text" name="gender" placeholder="Gender">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                            
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <div class="row">
                                <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 <input type="submit" class="au-btn au-btn--block au-btn--blue m-b-20" value="Register" name="submit">
                                 </div>
                                 
                                <div class="col-md-3">
                                <input type="reset" class="au-btn au-btn--block au-btn--blue m-b-20 " value="Cancel">
                                </div>
                                
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



<?php include('admin_footer.php');?>