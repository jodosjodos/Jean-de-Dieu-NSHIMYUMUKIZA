<?php

include("./dbcon2.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
<?php include('message.php'); ?>
  
    <div class="container mt-5">
    
       <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Login
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Student Name</label>
                                <input type="text" name="username" class="form-control" placeholder="enter student name">
                            </div>
                            <div class="mb-3">
                                <label>Student password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            
                           
                            <div class="mb-3">
                                <input type="submit"  class="btn btn-primary" name="submit" value="login"/>
                                not already a member ?  <a href="/CRUD/signUp.php" class="btn btn-primary">Sign up</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php



?>
