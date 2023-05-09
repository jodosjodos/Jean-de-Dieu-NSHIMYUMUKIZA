<?php
include("./dbcon2.php");
session_start();
session_destroy();
header("location:"."http://localhost/CRUD/login.php");
?>