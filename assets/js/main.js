document.getElementById("onLoadContainer").style.display = "none";

const fetchingData = () => {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("onLoadContainer").style.display = "block";
            setTimeout(_ => {
                console.log(this.responseText);
                document.getElementById("onLoadContainer").style.display = "none";
            }, 3000);
        }
    };
    xmlhttp.open("GET", "http://localhost/Wews/views/syncData.php", true);
    xmlhttp.send();
}