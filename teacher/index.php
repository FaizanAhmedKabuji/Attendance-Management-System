<?php
    ob_start();
    session_start();

    // if($_SESSION['name']!='session1')
    //    header('location:../login.php');
?>
<?php
    include('makeConnection.php');
    try
    {
        if(isset($_POST['att']))
        {
            $course=$_POST['course'];

            foreach($_POST['status'] as $rows=>$status) 
            {
                $courseID=  $_POST['courseID'][$rows];
                $date=      date('Y-m-d');
                $course=    $_POST['course'];
                $stat=      mysqli_query($dbhandle,"insert into attendance(stuID,course,status,date) values('$stuID','$course','$status','$date')");
            }
        }
    }
    catch(Execption $e)
    {
        $error_msg=$e->$getMessage();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Attendance Management System</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="zima.css" type="text/css">
    </head>
    <body>
            <div class="header-top">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav" id="navbar">
                                <div class="topFonts"><li class="nav-item"><a class="nav-link" href="index.php"  onclick="javascript:window.open('index.php','_self')">Home</a></li></div>
                                <div class="topFonts"><li class="nav-item"><a class="nav-link" href="arhive.php"  onclick="javascript:window.open('archive.php','_self')">Archive</a></li></div>
                            </ul>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <ul class="navbar-nav mr-auto" id="navbar">
                                <div class="topFonts"><li class="nav-item"><a class="nav-link" href="../logout.php"  onclick="javascript:window.open('logout.php','_self')">Logout</a></li></div>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="container" id="titleContainer">
                <blockcode class="blockquote text-center">
                    <h3>Attendance for: <?php echo date('Y-m-d');?></h3>
                </blockquote>
            </div>
            <div class="container" id="mainContent">
                <form action="post">
                    <div class="from-group" id="courseSelect">
                        <label>Select Course:</label>
                        <select name="course" id="input1">
                            <option  value="course1">Course1</option>
                            <option  value="course2">Course2</option>
                            <option  value="course3">Course3</option>
                            <option  value="course4">Course4</option>
                            <option  value="course5">Course5</option>
                            <option  value="course6">Course6</option>
                            <option  value="course7">Course7</option>
                        </select>
                    </div>
                    <br><br>
                    <div class="container">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Student ID</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Student's Batch</th>
                                    <th scope="col">Attendance</th>
                                </tr>
                            </thead>
                            <?php   
                                $rows=0;
                                $radio=0;
                                $query=mysqli_query($dbhandle,"select * from students order by stuID asc");

                                while($data=mysqli_fetch_array($query))
                                {
                                    $rows++;
                                    ?>
                                        <tr>
                                            <td><?php echo $data['stuID']; ?> <input type="hidden" name="courseID[]" value="<?php echo $data['stuID']; ?>"> </td>
                                            <td><?php echo $data['stuName']; ?></td>
                                            <td><?php echo $data['stuBatch']; ?></td>
                                            <td>
                                                <label>Present</label>
                                                <input type="radio" name="status[<?php echo $radio; ?>]" value="Present" checked>
                                                <label>Absent </label>
                                                <input type="radio" name="status[<?php echo $radio; ?>]" value="Absent">
                                            </td>
                                        </tr>
                                    <?php   
                                        $radio++;
                                }   
                            ?>
                        </table>
                        <div id="submitArea">
                            <input type="submit" name="att" class="btn btn-primary" id="submitButton">
                        </div>
                    </div>
                </form>
            </div>
    </body> 
</html>