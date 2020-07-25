<?php

    ob_start();
    session_start();
    
    // if($_SESSION['name']!='session1')
    // {
    //   header('location: login.php');
    // }
?>
<?php include('makeConnection.php');?>

<!DOCTYPE html>
<html>
    <head>
        <title>Attendance Management System</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="zima.css" type="text/css">
    </head>
    <body>
    <div class="header-top">
                <div class="container-lg">
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
            <h3>Attendance Archive</h3>

            </blockquote>
        </div>
        <div class="container" id="mainContent">
            <form action="post">
                <div class="form-group" id="courseSelect">
                    <label>Select Course</label>
                    <select name="course" id="input1">
                        <option value="course1">Course1</option>
                        <option value="course1">Course2</option>
                        <option value="course1">Course3</option>
                        <option value="course1">Course4</option>
                        <option value="course1">Course5</option>
                        <option value="course1">Course6</option>
                        <option value="course1">Course7</option>
                    </select>
                </div>
                <br><br>
                <div class="form-group" id="dateSelect">
                    <label>Date</label>
                    <input type="text" name="date" placeholder="yyyy-mm-dd">
                </div>
                <div class="form-group" id="submitArea">
                    <input type="submit" name="dateSubmit" value7="Search" id="submitButton" class="btn btn-primary">
                </div>
            </form>
        </div>
        <?php
            if(isset($_POST['dateSubmit']))
            {
                $date=      $_POST['date'];
                $course=    $_POST['course'];
                $query=     mysqli_query($dbhandle,"select * from attendance where reports.courseDate='$date' and reports.course = '$course'");
            }
            if(isset($_POST['dateSubmit']))
            {
        ?>      
                <div class="container">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Student ID</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Student's Batch</th>
                                <th scope="col">Date</th>
                                <th scope="col">Attendance Status</th>
                            </thead>
                <?php
                    $rows=0;
                    while($data = mysqli_fetch_array($dbhandle,$all_query))
                    {
                        $rows++;
                ?>
                        <tbody>
                            <tr>
                                <td><?php echo $data['stuID'];?></td>
                                <td><?php echo $data['stuName'];?></td>
                                <td><?php echo $data['stuBatch'];?></td>
                                <td><?php echo $data['date'];?></td>
                                <td><?php echo $data['status'];?></td>
                            </tr>
                        </tbody>
                        <?php
                    }
                }
                        ?>
                    </table>
                </div>
    </body> 
</html>