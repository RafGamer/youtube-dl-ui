<?php
session_start();
if(isset($_SESSION["loggedin"])) {
    if($_SESSION["loggedin"] != true) {
        die("error");
    }
} else {
    die("error");
}
?>