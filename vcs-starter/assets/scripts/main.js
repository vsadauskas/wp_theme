/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("manonavig");
    if (x.className === "navigacija") {
        x.className += " responsive";
    } else {
        x.className = "navigacija";
    }
    var y = document.getElementById("pic");
    if (y.className === "navpic"){
        y.className += " responsive";
    }
    else {
        y.className = "navpic";
    }
} 