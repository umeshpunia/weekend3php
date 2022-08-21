<?php
include_once "db.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $del_user_sql="delete from users where uid='$id'";

    if(mysqli_query($conn,$del_user_sql)){
        header("location:users.php");
    }else{
        echo "Not Deleted";
    }
}

?>