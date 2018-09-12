function start() {
    document.getElementById("submit").innerHTML = "loading...";
    validitytest();
}

function submit() {
    document.getElementById("rect1").style.visibility = "visible";
    document.getElementById("rect2").style.visibility = "visible";
    document.getElementById("rect3").style.visibility = "visible";
    document.getElementById("rect4").style.visibility = "visible";
    document.getElementById("rect5").style.visibility = "visible";
    document.getElementById("submit").innerHTML = "downloading... please wait...";
    document.getElementById("submit").setAttribute("onclick", "");
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("rect1").style.visibility = "hidden";
            document.getElementById("rect2").style.visibility = "hidden";
            document.getElementById("rect3").style.visibility = "hidden";
            document.getElementById("rect4").style.visibility = "hidden";
            document.getElementById("rect5").style.visibility = "hidden";
            document.getElementById("submit").innerHTML = "Ready - Download Now";
            var downloadlink = window.location.href + "download.php?file=" + this.responseText
            document.getElementById("submit").onclick = function() { 
                window.open(downloadlink, "_self");
            };
       }
    };
    var params = "?url=" + document.getElementById("url").value;
    http.open("GET", window.location.href + "dl.php" + params, true);
    http.send(params);
}

function resetbutton() {
    document.getElementById("submit").innerHTML = "Submit";
}

function validitytest() {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "pass") {
                submit();
            } else {
                document.getElementById("submit").innerHTML = "error - please try again and use a valid link";
                setTimeout(resetbutton, 2000);
                return;
            }
       }
    };
    var params = "?url=" + document.getElementById("url").value + "&password=" + md5(document.getElementById("password").value);
    http.open("GET", window.location.href + "validity_check.php" + params, true);
    http.send(params);
}