<?php
include '../include/dbconfig.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM `{$role}` WHERE email = '{$username}' && password='{$password}'";
    $select_user_query = mysqli_query($con, $query);
    if (!$select_user_query) {
        //die("QUERY FAILED ". mysqli_error($con));
        echo "select fail";
    }
    $row = mysqli_fetch_array($select_user_query);
    $db_id = $row['id'];
    $db_username = $row['email'];
    $db_user_password = $row['password'];
    $db_user = $row['name'];


    if ($username !== $db_username && $password !== $db_user_password) {
        header("Location:index.php");
    } else if ($username == $db_username && $password == $db_user_password && $role == "admin") {
        $_SESSION['username'] = $db_user;
        $_SESSION['id'] = $db_id;
        header("Location:../admin/add-user.php");
    }
}
