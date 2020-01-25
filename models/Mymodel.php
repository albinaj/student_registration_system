<?php
        class Mymodel
        {
                function insert($f_name,$dpt_name,$email,$mobile,$address,$dob,$gender,$pass)
                {
                    include '../config/connection.php';
                    $sql        = "INSERT INTO faculty (fac_name,department,email,mobile,address,dob,gender,password) VALUES
                     ('".$f_name."','".$dpt_name."','".$email."','".$mobile."','".$address."','".$dob."','".$gender."','".$pass."')";
                    if(mysqli_query($conn,$sql))
                    {
                        return true;
                    }
                    
                }
                function authentication($uname,$pword)
                {
                    include '../config/connection.php';
                    $sql        = "SELECT * FROM admin WHERE username='".$uname."' and password='".$pword."'";
                    $result     = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        return 'admin';
                    }
                    else
                    {
                        include '../config/connection.php';
                        $sql        = "SELECT * FROM faculty WHERE email='".$uname."' and password='".$pword."' and status='approved'";
                        $result     = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row=mysqli_fetch_assoc($result))
			                    {
				                    session_start();
                                    $_SESSION['fac_id']   = $row['fac_id'];
                                    $_SESSION['fac_dept'] = $row['department'];
                                    return 'faculty';
                                }
				            
                                
                        }
                        else
                        {
                            include '../config/connection.php';
                            $sql        = "SELECT * FROM student WHERE email='".$uname."' and password='".$pword."'";
                            $result     = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0)
                            {
                                while($row=mysqli_fetch_assoc($result))
                                    {
                                        session_start();
                                        $_SESSION['reg_no']   = $row['reg_no'];
                                        $_SESSION['stud_dept'] = $row['department'];
                                        return 'student';
                                    }
                                
                                    
                            }

                        }


                    }
                }
                function update($fac_id,$f_name,$dpt_name,$email,$mobile,$address,$dob)
                {
                    include '../config/connection.php';
                    $sql        = "UPDATE faculty SET fac_name='".$f_name."',department='".$dpt_name."',email='".$email."',mobile='".$mobile."',address='".$address."',dob='".$dob."' where fac_id='".$fac_id."'";
                    
                    if(!$result=$conn->query($sql))
	                    {
		                    die('there was an error running the query['.$conn->error.']');
	                    }
	                else
	                    {
                         
                            return true;
	                    }
                }
                function approve_fac($fac_id)
                    {

                        include '../config/connection.php';
                    $sql        = "UPDATE faculty SET status='Approved' WHERE fac_id='".$fac_id."'";
                    if(!$result=$conn->query($sql))
	                    {
		                    die('there was an error running the query['.$conn->error.']');
	                    }
	                else
	                    {
                         
                            return true;
	                    }
                    }
                function reg_stud($s_name,$dpt_name,$email,$mobile,$address,$dob,$gender,$pass)
                {
                    include '../config/connection.php';
                    $sql        = "INSERT INTO student (s_name,department,email,mobile,address,dob,gender,password) VALUES
                     ('".$s_name."','".$dpt_name."','".$email."','".$mobile."','".$address."','".$dob."','".$gender."','".$pass."')";
                    if(mysqli_query($conn,$sql))
                    {
                        return true;
                    }

                }
                function student_update($reg_no,$s_name,$dpt_name,$email,$mobile,$address,$dob)
                {
                        include '../config/connection.php';
                         $sql        = "UPDATE student SET s_name='".$s_name."',department='".$dpt_name."',email='".$email."',mobile='".$mobile."',address='".$address."',dob='".$dob."' where reg_no='".$reg_no."'";

                        if(!$result=$conn->query($sql))
	                     {
		                        die('there was an error running the query['.$conn->error.']');
	                    }
	                    else
	                    {
                         
                               return true;
	                    }

                }
                function admin_student_update($reg_no,$s_name,$dpt_name,$email,$mobile,$address,$dob)
                {
                  
                        include '../config/connection.php';
                         $sql        = "UPDATE student SET s_name='".$s_name."',department='".$dpt_name."',email='".$email."',mobile='".$mobile."',address='".$address."',dob='".$dob."' where reg_no='".$reg_no."'";

                        if(!$result=$conn->query($sql))
	                     {
		                        die('there was an error running the query['.$conn->error.']');
	                    }
	                    else
	                    {
                         
                               return true;
	                    }

                }
                function admin_add_semester($department,$semester,$sub1,$sub2,$sub3,$sub4)
                {
                        include '../config/connection.php';
                        $sql        = "INSERT INTO department (department,semester,sub1,sub2,sub3,sub4) VALUES
                         ('".$department."','".$semester."','".$sub1."','".$sub2."','".$sub3."','".$sub4."')";
                        if(mysqli_query($conn,$sql))
                        {
                           return true;
                         }


                }
                function admin_create_not($Title,$Beginning_date,$Author,$Ending_date,$Description)
                {
                        include '../config/connection.php';
                        $sql        = "INSERT INTO notices (Title,Beginning_date,Author,Ending_date,Description) VALUES
                        ('".$Title."','".$Beginning_date."','".$Author."','".$Ending_date."','".$Description."')";
                        if(mysqli_query($conn,$sql))
                         {
                             return true;
                         }


                }
                function faculty_edit_subject($sub1,$sub2,$sub3,$sub4,$semester)
                {
                        include '../config/connection.php';
                         $var3     = $_SESSION['fac_dept'];
                         $sql        = " UPDATE department SET sub1='".$sub1."',sub2='".$sub2."',sub3='".$sub3."',sub4='".$sub4."' where semester='".$semester."' and department='".$var3."'";

                        if(!$result=$conn->query($sql))
	                     {
		                        die('there was an error running the query['.$conn->error.']');
	                    }
	                    else
	                    {
                         
                               return true;
                        }
                        


                }
                function faculty_create_not($Title,$Beginning_date,$Author,$Ending_date,$Description)
                {
                   
                        include '../config/connection.php';
                        $sql        = "INSERT INTO notices (Title,Beginning_date,Author,Ending_date,Description) VALUES
                        ('".$Title."','".$Beginning_date."','".$Author."','".$Ending_date."','".$Description."')";
                        if(mysqli_query($conn,$sql))
                         {
                             return true;
                         }
                }
                function stud_edit_profile($reg_no,$s_name,$dpt_name,$email,$mobile,$address,$dob)
                {
                        include '../config/connection.php';
                         $var3     = $_SESSION['reg_no'];
                         $sql        = "UPDATE student SET s_name='".$s_name."',department='".$dpt_name."',email='".$email."',mobile='".$mobile."',address='".$address."',dob='".$dob."' where reg_no='".$var3."'";

                        if(!$result=$conn->query($sql))
	                     {
		                        die('there was an error running the query['.$conn->error.']');
	                    }
	                    else
	                    {
                         
                               return true;
                        }
                        

                }
                function fac_create_timetable($department,$semester,$day,$h1,$h2,$h3,$h4)
                {
                   
                        include '../config/connection.php';
                        $sql        = "INSERT INTO timetable (department,semester,day,h1,h2,h3,h4) VALUES
                        ('".$department."','".$semester."','".$day."','".$h1."','".$h2."','".$h3."','".$h4."')";
                        if(mysqli_query($conn,$sql))
                         {
                             return true;
                         }
                }
               
                
        }
?>