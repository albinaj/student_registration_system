<?php
        include '../models/Mymodel.php';
        class MyController
        {     
                function LoadFirst()
                {
                        header('location:views/home.php');
                }
                
                
                function Login($uname,$pword)
                {
                        $mod    = new Mymodel();
                        $var    = $mod->authentication($uname,$pword);
                        if ($var == 'admin')
                        {
                                header('location:admin_home.php');
                        }
                        else if($var == 'faculty')
                        {
                                header('location:faculty_home.php');
                                
                        }
                        else if($var == 'student')
                        {
                                header('location:student_home.php');
                                
                        }
                        else
                        {
                                echo "username or password is incorrect";
                        }
                               
                }
                function Signup($f_name,$dpt_name,$email,$mobile,$address,$dob,$gender,$pass)
                {
                        
                        $mod    = new Mymodel();
                        $var    = $mod->insert($f_name,$dpt_name,$email,$mobile,$address,$dob,$gender,$pass);
                        if ($var == 'true')
                        {
                                header('location:../views/index.php');
                        }
                }
               function fac_update($fac_id,$f_name,$dpt_name,$email,$mobile,$address,$dob)
               {
                       $mod     = new Mymodel();
                       $var     = $mod->update($fac_id,$f_name,$dpt_name,$email,$mobile,$address,$dob);
                       if ($var == 'true')
                       {
                               header('location:../views/admin_fac_profile.php');
                       }
               }
               function fac_approve($fac_id)
               {
                        $mod     = new Mymodel();
                        $var     = $mod->approve_fac($fac_id);
                        if ($var == 'true')
                        {
                                header('location:../views/admin_faculty.php');
                        }

               }
               function stud_reg($s_name,$dpt_name,$email,$mobile,$address,$dob,$gender,$pass)
               {
                        $mod    = new Mymodel();
                        $var    = $mod->reg_stud($s_name,$dpt_name,$email,$mobile,$address,$dob,$gender,$pass);
                        if ($var == 'true')
                        {
                                header('location:../views/faculty_home.php');
                        }

               }
               function stud_update($reg_no,$s_name,$dpt_name,$email,$mobile,$address,$dob)
               {
                       $mod     = new Mymodel();
                       $var     = $mod->student_update($reg_no,$s_name,$dpt_name,$email,$mobile,$address,$dob);
                       if ($var == 'true')
                       {
                               header('location:../views/faculty_view_students.php');
                       }

               }
               function admin_stud_update($reg_no,$s_name,$dpt_name,$email,$mobile,$address,$dob)
               {
                       $mod     = new Mymodel();
                       $var     = $mod->admin_student_update($reg_no,$s_name,$dpt_name,$email,$mobile,$address,$dob);
                       if ($var == 'true')
                       {
                               header('location:../views/admin_students.php');
                       }

               }
               function admin_add_sem($department,$semester,$sub1,$sub2,$sub3,$sub4)
               {
                        $mod    = new Mymodel();
                        $var    = $mod->admin_add_semester($department,$semester,$sub1,$sub2,$sub3,$sub4);
                        if ($var == 'true')
                        {
                                header('location:../views/admin_add_semester.php');
                        }

               }
               function admin_create_notice($Title,$Beginning_date,$Author,$Ending_date,$Description)
               {
                        $mod    = new Mymodel();
                        $var    = $mod->admin_create_not($Title,$Beginning_date,$Author,$Ending_date,$Description);
                        if ($var == 'true')
                        {
                                header('location:../views/admin_view_notices.php');
                        } 

               }
               function faculty_edit_sub($sub1,$sub2,$sub3,$sub4,$semester)
               {
                       $mod     = new Mymodel();
                       $var     = $mod->faculty_edit_subject($sub1,$sub2,$sub3,$sub4,$semester);
                       if ($var == 'true')
                       {
                               header('location:../views/faculty_semesters.php');
                       }

               }
               function faculty_create_notice($Title,$Beginning_date,$Author,$Ending_date,$Description)
               {
                        
                        $mod    = new Mymodel();
                        $var    = $mod->faculty_create_not($Title,$Beginning_date,$Author,$Ending_date,$Description);
                        if ($var == 'true')
                        {
                                header('location:../views/admin_view_notices.php');
                        } 
               }
               function stud_edit_prof($reg_no,$s_name,$dpt_name,$email,$mobile,$address,$dob)
               {
                       $mod     = new Mymodel();
                       $var     = $mod->stud_edit_profile($reg_no,$s_name,$dpt_name,$email,$mobile,$address,$dob);
                       if ($var == 'true')
                       {
                               header('location:../views/student_profile.php');
                       }

               }
               function faculty_create_timetable($department,$semester,$day,$h1,$h2,$h3,$h4)
               {
                        
                       $mod     = new Mymodel();
                       $var     = $mod->fac_create_timetable($department,$semester,$day,$h1,$h2,$h3,$h4);
                       if ($var == 'true')
                       {
                               header('location:faculty_timetable.php');
                       }
               }
                
        }
        
?>