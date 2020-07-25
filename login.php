<?php
    if(isset($_POST['login']))
    {
        try
        {
            if(empty($_POST['username']))
                throw new Exception("Username is required!");
            if(empty($_POST['password']))
                throw new Exception("Password is required!");
            
            include('makeConnection.php');
            $rows=0;
            $result=mysqli_query($dbhandle,"select * from admin where username='$_POST[username]' and password='$_POST[password]' and type='$_POST[type]'");
            $rows=mysqli_num_rows($result);

            if($rows>0&&$_POST['type']=='admin')
            {
                session_start();
                $_SESSION['name']="session1";
                header('location:admin/index.php');
            }
            else if($rows>0&&$_POST['type']=='teacher')
            {
                session_start();
                $_SESSION['name']="session1";
                header('location:teacher/index.php');
            }
            else if($rows>0&&$_POST['type']=='student')
            {
                session_start();
                $_SESSION['name']="session1";
                header('location:student/index.php');
            }
        }
        catch(Exception $e)
        {
            $error_msg=$e->getMessage();
        }
    }
?>