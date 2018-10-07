<?php
include("php/authentication_check.php");
include("php/settings.php");
$url = $_GET["url"];

$checkifurlvalid = exec(YOUTUBEDLPATH . ' -j ' . escapeshellarg($url));
if($checkifurlvalid == null) {
    print("error");
    die();
}

// downloads the video and converts it to mp3
$download = shell_exec(YOUTUBEDLPATH . ' --add-metadata --embed-thumbnail --extract-audio --audio-format mp3 -o "' . TEMPFOLDER . '//' . '%(id)s.%(ext)s" ' . escapeshellarg($url));

print($url);
?>