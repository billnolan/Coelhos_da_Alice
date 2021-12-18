window.onload = function(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("regras").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", "filler.php", true);
    xmlhttp.send();
}