<?php
session_start();
include("php/settings.php");
$url = $_GET["url"];
$password = $_GET["password"];
if($password === md5(masterpassword)) {
    $_SESSION["loggedin"] = true;
} else {
    die("error");
}
$checkifurlvalid = exec(YOUTUBEDLPATH . ' -j ' . $url);
if($checkifurlvalid != null) {
    print("pass");
} else {
    print("error");
}
?>