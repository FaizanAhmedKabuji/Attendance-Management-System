<?php
    include('createUser.php');
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
                        <ul class="navbar-nav">
                            <div class="topFonts"><li class="nav-item"><a class="nav-link" href="index.php"  onclick="javascript:window.open('index.php','_self')">Create Users</a></li></div>
                        </ul>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <ul class="navbar-nav mr-auto" id="nav">
                            <div class="topFonts"><li class="nav-item"><a class="nav-link" href="../logout.php"  onclick="javascript:window.open('logout.php','_self')">Logout</a></li></div>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container"> 
            <div class="row">
                <div class="col">
                    <div class="container" id="titleContainer">
                        <blockcode class="blockquote text-center">
                            <h3>Form to add a teacher</h3>
                        </blockquote>
                    </div>
                    <form action="post" id="formsSection">
                        <div class="form-group">
                            <label for="input1">Teacher's ID    </label>
                            <input type="text" name="teaID" placeholder="Enter Student's">
                        </div>
                        <div class="form-group">
                            <label for="input1">Teacher's Name</label>
                            <input type="text" name="teaName" placeholder="Enter Teacher's Name">
                        </div>
                        <div class="form-group">
                            <label for="input1">Teacher's Batch</label>
                            <input type="text" name="teaDept" placeholder="Enter Teacher's Batch">
                        </div>
                        <div id="submitArea">
                            <input type="submit" name="tea" id="submitButton" value="Add Teacher" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="col">
                <div class="container" id="titleContainer">
                        <blockcode class="blockquote text-center">
                            <h3>Form to add a student</h3>
                        </blockquote>
                    </div>
                    <form action="post" id="formsSection">
                        <div class="form-group">
                            <label for="input1">Student's ID</label>
                            <input type="text" name="stuID" placeholder="Enter Student's ID">
                        </div>
                        <div class="form-group">
                            <label for="input1">Student's Name</label>
                            <input type="text" name="stuName" placeholder="Enter Student's Name">
                        </div>
                        <div class="form-group">
                            <label for="input1">Student's Batch</label>
                            <input type="text" name="stuBatch" placeholder="Enter Student's Batch">
                        </div>
                        <div id="submitArea">
                            <input type="submit" name="stu" id="submitButton" value="Add Student" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
