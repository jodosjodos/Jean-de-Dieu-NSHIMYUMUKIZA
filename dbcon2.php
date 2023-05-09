<?php
 



 $connect = mysqli_connect("localhost","root","","login_db");

if(!$connect){
    die('Connection Failed'. mysqli_connect_error());
}

?>