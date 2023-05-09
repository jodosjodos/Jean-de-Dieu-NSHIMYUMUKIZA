<?php
session_start();
require 'dbcon.php';
require "dbcon2.php";

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
   
    $sql="SELECT * FROM admin WHERE usernames='$username' AND passwords='$password'";
    $result=mysqli_query($connect,$sql);
    $count=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    
    if($count===1){
        $_SESSION['message']="welcome".$username;
        $_SESSION['loggedin'] = true;
        header("location:"."http://localhost/CRUD");
        exit();
    }else{
        $_SESSION['message']="no user found with this ".$username;
        header("location:"."http://localhost/CRUD/login.php");
        exit();
    }
    

}

if(isset($_POST['register'])){
    $userName=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];

    $sql="INSERT INTO admin (usernames,email,passwords,phone) VALUES ('$userName','$email','$password','$phone')";
    $res=mysqli_query($connect,$sql);

    if($res===true){
        $_SESSION['message']='account'.$userName.' created successfully';
        header("location:"."http://localhost/CRUD/login.php");
        exit();
    }else{
        $_SESSION['message']='account'.$userName.'not registered';
        header("location:"."http://localhost/CRUD/signUp.php");
        exit();
    }
}

    

?>