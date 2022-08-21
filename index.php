<?php
include_once "db.php";
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];

    $ins_user="INSERT INTO `users` (`uid`, `name`, `email`, `add_on`) VALUES (NULL, '$name', '$email', current_timestamp())";

    if(mysqli_query($conn,$ins_user)){
        header("location:users.php");
    }else{
        echo "Not Inserted";

    }




}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <h1 class="my-5 text-center">Register Here</h1>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <button type="submit" name="sub" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>