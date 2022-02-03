lft = document.getElementById("loqid");

var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= 200) {
        lft.className = "loq show"
    } else {
        lft.className = "loq hide"
    }
};

window.addEventListener("scroll", myScrollFunc);

rt = document.getElementById("rtside");

var myScrollFunc = function () {
    var y2 = window.scrollY;
    if (y2 >= 200) {
        rt.className = "rightside show"
    } else {
        rt.className = "rightside hide"
    }
};

window.addEventListener("scroll", myScrollFunc);