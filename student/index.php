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
                        <ul class="navbar-nav">
                            <div class="topFonts"><li class="nav-item"><a class="nav-link" href="index.php"  onclick="javascript:window.open('index.php','_self')">Home</a></li></div>
                        </ul>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <ul class="navbar-nav mr-auto">
                            <div class="topFonts"><li class="nav-item"><a class="nav-link" href="../logout.php"  onclick="javascript:window.open('logout.php','_self')">Logout</a></li></div>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container" id="titleContainer">
                <blockcode class="blockquote text-center">
                    <h3>Student's Portal</h3>
                </blockquote>
            </div>
            <div class="container">
                <form action="post">
                    <div class="form-group" id="courseSelect">
                    <label>Select Course</label>
                        <select name="course" id="input1">
                            <option value="course1">course1</option>
                            <option value="course2">course2</option>
                            <option value="course3">course3</option>
                            <option value="course4">course4</option>
                            <option value="course5">course5</option>
                            <option value="course6">course6</option>
                            <option value="course7">course7</option>
                        </select>
                    </div>
                    <div class="form-group" id="enterID">
                        <label>Enter ID: </label>
                        <input type="text" name="stuID" id="" placeholder="Enter your ID">
                    </div>
                    <div id="submitArea">
                        <input type="submit" value="Go" class="btn btn-primary" name="stuSub" id="submitButton">
                    </div>
                </form>
                <div class="container">
                    <form action="post">
                        <table class="table table-dark">
                            <?php
                                if(isset($_POST['stuSub']))
                                {
                                    $stuID=$_POST['stuID'];
                                    $course=$_POST['course'];

                                    $rows=0;
                                    $count=0;
                                    $all_query = mysqli_query($dbhandle,"select stat_id,count(*) as countP from attendance where attendance.courseID='$stuID' and attendance.course = '$course' and attendance.status='Present'");
                                    $singleT= mysqli_query($dbhandle,"select count(*) as countT from attendance where attendance.courseID='$stuID' and attendance.course = '$course'");
                                    $total;

                                    if($row=mysqli_fetch_row($singleT))
                                        $total=$row[0];
                                    
                                    while($data = mysql_fetch_array($all_query))
                                    {
                                        $rows++;
                                        if($rows<=1)
                                        {
                            ?>
                                            <tbody>
                                                <tr>
                                                    <td>ID Number: </td>
                                                    <td><?php echo $data['courseID']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td> Present Days: </td>
                                                    <td><?php echo $total-$data[1]; ?></td>
                                                </tr>
                                            </tbody>
                            <?php
                                        }
                                    }
                                }
                            ?>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>