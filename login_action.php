<?php
require_once('session_start.php');
require_once "conn.php";

if (!empty($_POST)) {

    $userId = trim($_POST['user_id']);
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE user_id='$userId' AND password='$pass';";

    $result = mysqli_query($conn, $sql);

    $result_count = mysqli_num_rows($result);

    mysqli_close($conn);

    if ($result_count > 0) {
        // record found: redirect to profile page

        $_SESSION["is_user_logged_in"] = TRUE;
        $_SESSION["user_id"] = $userId;

        header("location:index.php");
    } else {
        echo 'User ID or Password Not Matched...';
    }

} // post end

