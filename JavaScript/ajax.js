function showHint(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("embededPage").setAttribute("src", "embeded.php?page="+this.responseText);
        }
    }

    document.getElementById(str).setAttribute("name", "selected");
    var pages = document.getElementsByClassName("pageBtn");
    for (var i=0; i < pages.length; i++){
        if(pages[i].id != str){
            pages[i].setAttribute("name", "");
        }
    }

    xmlhttp.open("GET", "getPage.php?page="+str, true);
    xmlhttp.send();
}