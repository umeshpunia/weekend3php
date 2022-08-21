<?php
include_once "db.php";


$get_users_sql = "select * from users";

$get_users_query = mysqli_query($conn, $get_users_sql);



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
        <h1 class="my-5 text-center">Users Detail</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Added On</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                while ($get_users = mysqli_fetch_assoc($get_users_query)) {
                ?>

                    <tr>
                        <th scope="row"><?=$i++?></th>
                        <td><?=$get_users['name']?></td>
                        <td><?=$get_users['email']?></td>
                        <td><?=$get_users['add_on']?></td>
                        <td>
                            <a href="del.php?id=<?=$get_users['uid']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>