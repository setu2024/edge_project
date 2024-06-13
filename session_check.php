<?php
if (!isset($_SESSION["is_user_logged_in"])) {
    die(header("location:login.php"));
}
