<?php
$con = mysqli_connect('localhost', 'root','');

mysqli_select_db($con, 'webproject');

if(!$con){
    die("Connection Error: ".mysqli_connect_error);
}

?>