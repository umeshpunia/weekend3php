<?php
include_once "db.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $check_user_sql="select * from users where uid='$id'";

    $check_user_query=mysqli_query($conn,$check_user_sql);

    if(mysqli_num_rows($check_user_query) > 0){
        $get_user=mysqli_fetch_assoc($check_user_query);
    }else{
        header("location:users.php");
    }

}

if(isset($_POST['upd'])){
    $name=$_POST['name'];
    $email=$_POST['email'];


    $upd_user_sql="update users set name='$name',email='$email' where uid=$id";

    if(mysqli_query($conn,$upd_user_sql)){
        header("location:users.php");
    }else{
        $msg="Please Try Again";
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
        <h1 class="my-5 text-center">User Detail</h1>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">

            <form method="post">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input name="name" value="<?=$get_user['name']?>" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input name="email" type="text" value="<?=$get_user['email']?>" class="form-control">
                </div>
                <h3 class="text-danger"><?=@$msg?></h3>
                <button type="submit" class="btn btn-warning" name="upd">Update</button>
            </form>

            </div>
            <div class="col-sm-3"></div>
        </div>

    </div>
</body>
</html>

