<?php
    $dbhandle=mysqli_connect('localhost','root','') or die('Cannot connect to server');
    mysqli_select_db($dbhandle,'amsDatabase') or die ('Cannot found database');
?>