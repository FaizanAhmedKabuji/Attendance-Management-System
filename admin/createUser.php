<?php
    ob_start();
    session_start();

    // if($_SESSION['name']!='session1')
    //     header('location: ../index.php');
?>
<?php
    include('makeConnection.php');
    
    try
    {
        if(isset($_POST['tea']))
        {
            $result = mysqli_query($dbhandle,"insert into teachers(teaID,teaName,teaDept) values('$_POST[teaID]','$_POST[teaName]','$_POST[teaDept]'");
            $success_msg = "Teacher added successfully.";
        }
        if(isset($_POST['stu']))
        {
            $result = mysqli_query($dbhandle,"insert into students(stuID,stuName,stuDept) values('$_POST[stuID]','$_POST[stuName]','$_POST[stuBatch]'");
            $success_msg = "Student added successfully.";
        }
    }
    catch(Execption $e)
    {
        $error_msg =$e->getMessage();
    }
?>