function ConfirmPW() {
    let pw = document.getElementById("pass").value;
    let pw2 = document.getElementById("pass2").value;
    if (pw !== pw2) {
        document.getElementById("errPass").style.display = "block";
    }
    else {
        document.getElementById("errPass").style.display = "none";
    }
}
function checkupdate() {
    return confirm("Do you want update this profile?");
}
function checkdelete() {
    return confirm("Do you want delete this account?");
}
function Click(evt) {
    evt.currentTarget.className = "tikicon icon-check-on";
}
function openTabs(evt, tabsname) {
    var i, tabcontent, tabs;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tabs = document.getElementsByClassName("tablinks");
    for (i = 0; i < tabs.length; i++) {
        tabs[i].className = tabs[i].className.replace(" active", "");
    }
    document.getElementById(tabsname).style.display = "block";
    evt.currentTarget.className += " active";
}

