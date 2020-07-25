<?php
    $dbhandle=mysql_connect('localhost','root','') or die('Cannot connect to server');
    mysql_select_db($dbahndle,'amsDatabase') or die ('Cannot found database');
?>