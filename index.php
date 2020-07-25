<?php
    include('login.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Attendance Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="zima.css" type="text/css">
    </head>
    <body>
        <div class="layer">
            <div class="container" id="titleContainer">
                <blockcode class="blockquote text-center">
                    <h1>Attendance Management System</h1>
                    <h3>Login Page</h3>
                </blockquote>
            </div>
            <div class="container" id="formContainer">
                <form method="post" class="" id="mainForm"> 
                    <div class="form-group">
                        <input type="text" id="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="Password" id="password" placeholder="Password">
                    </div>
                    <br>
                    <div class="form-check form-check-inline" id="radioButtons">
                        <div class="form-check form-check-inline">
                            <label>
                                <input type="radio" name="type" id="radio1" value="admin" checked>Admin
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label>
                                <input type="radio" name="type" id="radio1" value="teacher" checked>Teacher
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label>
                                <input type="radio" name="type" id="radio1" value="student" checked>Student
                            </label>
                        </div>
                    </div>
                    <br><br>
                    <input type="submit" name="login" class="btn btn-primary" id="btnMain">
                </form>
            </div>
        </div>
    </body>
</html>

    