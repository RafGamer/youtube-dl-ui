<?php
include("php/authentication_check.php");
include("php/settings.php");
if(isset($_GET["file"])) {
    $filename = $_GET["file"];
} else {
    die("error");
}
if($filename == "") {
    die("error");
}
$id = exec(YOUTUBEDLPATH . " --get-id " . escapeshellarg($filename));
$file = "temp/" . $id . ".mp3";
$videoname = exec(YOUTUBEDLPATH . " -e " . escapeshellarg($filename));
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($videoname).'.mp3"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    unlink($file);
    exit;
} else {
    die("error");
}
?>