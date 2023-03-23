<?php
include '../include/dbconfig.php';
if (isset($_POST['add-user'])) {
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $name = $_POST['name'];

    $sql = "INSERT INTO `users`(`name`, `email`, `mobile`) VALUES ('$name','$email','$phone');";

    if ($con->query($sql) == true) {
        echo '<script type="text/javascript">
            window.location.href = "../admin/user-details.php";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['add-task'])) {
    $users = $_POST['users'];
    $task_detail = $_POST['task_detail'];
    $task_type = $_POST['task_type'];

    $sql = "INSERT INTO `add_task`(`user_id`, `task_detail`, `task_type`) VALUES ('$users','$task_detail','$task_type');";

    if ($con->query($sql) == true) {
        echo '<script type="text/javascript">
            window.location.href = "../admin/task-details.php";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}