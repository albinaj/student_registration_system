<?php include('admin_header.php');

include '../controller/MyController.php';
    $obj = new MyController();
    if(isset($_POST['submit']))
    {
        $Title               = $_POST['Title'];
        $Beginning_date      = $_POST['Beginning-date'];
        $Author              = $_POST['Author'];
        $Ending_date         = $_POST['Ending-date'];
        $Description         = $_POST['Description'];
        
        $obj->admin_create_notice($Title,$Beginning_date,$Author,$Ending_date,$Description);
    }
?> 

<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div>
                        <br>
                            <h3>Create New Notice</h3>
                            <br>
                        </div>
                        <div class="login-form">
                            <form  method="post">
                                
                                <div class="form-group">
                                    <label>Title </label>
                                    <input class="au-input au-input--full" type="text" name="Title" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label>Beginning date </label>
                                    <input class="au-input au-input--full" type="date" name="Beginning-date" placeholder="Beginning date ">
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input class="au-input au-input--full" type="text" name="Author" placeholder="Author">
                                </div>
                                <div class="form-group">
                                    <label>Ending date</label>
                                    <input class="au-input au-input--full" type="date" name="Ending-date" placeholder="Ending date">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="au-input au-input--full" type="text" name="Description" placeholder="Description">
                                </div>
                                
                            
                                
                                <div class="row">
                                <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 <input type="submit" class="au-btn au-btn--block au-btn--blue m-b-20" value="Create" name="submit">
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