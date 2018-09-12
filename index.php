<?php

?>

<head>
<script src="js/md5.js"></script>
<script src="js/index.js"></script>
<link href="https://bootswatch.com/4/darkly/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
</head>

<div class="center-div">
    <input class="form-control form-control-lg" type="text" placeholder="enter url here..." id="url" name="url"><br>
    <input class="form-control form-control-lg" type="password" placeholder="enter password here..." id="password" name="password"><br>
    <button type="button" id="submit" class="btn btn-primary" onclick="start();" style="width: 100%;">Submit</button>

    <div class="spinner">
        <div id="rect1" class="rect1" style="visibility: hidden;"></div>
        <div id="rect2" class="rect2" style="visibility: hidden;"></div>
        <div id="rect3" class="rect3" style="visibility: hidden;"></div>
        <div id="rect4" class="rect4" style="visibility: hidden;"></div>
        <div id="rect5" class="rect5" style="visibility: hidden;"></div>
    </div>
</div>