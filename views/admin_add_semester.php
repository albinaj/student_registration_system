<?php include('admin_header.php');

include '../controller/MyController.php';
    $obj = new MyController();
    if(isset($_POST['submit']))
    {
        $department    = $_POST['department'];
        $semester      = $_POST['semester'];
        $sub1          = $_POST['sub1'];
        $sub2          = $_POST['sub2'];
        $sub3          = $_POST['sub3'];
        $sub4          = $_POST['sub4'];
        $obj->admin_add_sem($department,$semester,$sub1,$sub2,$sub3,$sub4);
    }
?> 

<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="container">
                            <br>
                            <h3>Add Semester</h3>
                            <br>
                        </div>
                        <div class="login-form">
                            <form  method="post">
                                <div class="form-group">
                                    <label>Department</label>
                                    <input class="au-input au-input--full" type="text" name="department" placeholder="Department">
                                </div>
                                
                                <div class="form-group">
                                    <label>Semester</label>
                                    <input class="au-input au-input--full" type="text" name="semester" placeholder="Semester">
                                </div>
                                <div class="form-group">
                                    <label>Subject 1</label>
                                    <input class="au-input au-input--full" type="text" name="sub1" placeholder="Subject 1">
                                </div>
                                <div class="form-group">
                                    <label>subject 2</label>
                                    <input class="au-input au-input--full" type="text" name="sub2" placeholder="Subject 2">
                                </div>
                                <div class="form-group">
                                    <label>Subject 3</label>
                                    <input class="au-input au-input--full" type="text" name="sub3" placeholder="Subject 3">
                                </div>
                                <div class="form-group">
                                    <label>Subject 4</label>
                                    <input class="au-input au-input--full" type="text" name="sub4" placeholder="Subject 4">
                                </div>
                                
                                <div class="row">
                                <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 <input type="submit" class="au-btn au-btn--block au-btn--blue m-b-20" value="Add" name="submit">
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