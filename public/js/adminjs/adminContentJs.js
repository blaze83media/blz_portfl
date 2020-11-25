function clkk(q, w) {
    var i, mn, pjtJs;
    var mn = document.getElementsByClassName("showPrjt");
    for (i = 0; i < mn.length; i++) {
        mn[i].style.display = "none";
    }

    var tab_buttons = document.getElementsByClassName("pjtJs");
    for (i = 0; i < tab_buttons.length; i++) {
        tab_buttons[i].className = tab_buttons[i].className.replace(" active", "");
    }

    document.getElementById(w).style.display = "block";
    q.currentTarget.className += " active";

}