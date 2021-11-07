let dde = document.getElementById("body");
let bg = document.getElementById("background");
dde.addEventListener("mousemove", e => {
    console.log("go");
    bg.style.setProperty('--mouseX', -e.clientX + "px");
    bg.style.setProperty('--mouseY', -e.clientY + "px");
    bg.style.setProperty('--scale', "1.1");

    lastx = e.clientX;
    lasty = e.clientY;

    // wait 2 seconds
});

var lastx = 0;
var lasty = 0;

var lastxtemp = 0;
var lastytemp = 0;

function checkGo() {
    if (lastxtemp === lastx && lastytemp === lasty) {
        bg.style.setProperty('--mouseX', "0p");
        bg.style.setProperty('--mouseY', "0p");
        bg.style.setProperty('--scale', "1");
    }
    lastxtemp = lastx;
    lastytemp = lasty;

    
    setTimeout(() => {
        checkGo();
    }, 500);
}

setTimeout(() => {
    checkGo();
}, 10);

