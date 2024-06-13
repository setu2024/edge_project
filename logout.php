<?php
require_once('session_start.php');

if (isset($_SESSION["is_user_logged_in"])) {

    unset($_SESSION["is_user_logged_in"]);
    unset($_SESSION["user_id"]);

    session_destroy();
    // redirect to home page
    header("location:login.php");
} else {
    echo '<h1 style="text-align: center">You are not logged In</h1>';
}
