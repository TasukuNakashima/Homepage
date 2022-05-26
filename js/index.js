const color1 = document.getElementById("color1")
window.addEventListener("scroll", function() {

    let scroll = window.pageYOffset;

    if (scroll > 480) {
        color1.style.backgroundColor = '#800000';
    } else {
        color1.style.backgroundColor = '#F2F2F2';
    }

});
const svg = document.querySelector(".svg")
window.addEventListener("scroll", function() {

    let scroll = window.pageYOffset;

    if (scroll > 480) {
        svg.style.fill = '#ffffff';
    } else {
        svg.style.fill = '#000000';
    }

});
const color2 = document.querySelector(".link1")
var sheet = document.styleSheets[0];
window.addEventListener("scroll", function() {
    let scroll = window.pageYOffset;

    if (scroll > 480) {
        color2.style.color = '#ffffff';
        sheet.insertRule('.link {color: #ffffff;}', 0);
    } else {
        color2.style.color = '#000000';
        sheet.insertRule('.link {color: #000000;}', 0);
    }

});
const color3 = document.querySelector(".link2")
window.addEventListener("scroll", function() {
    let scroll = window.pageYOffset;

    if (scroll > 480) {
        color3.style.color = '#ffffff';
    } else {
        color3.style.color = '#000000';
    }

});
const color4 = document.querySelector(".link3")
window.addEventListener("scroll", function() {
    let scroll = window.pageYOffset;

    if (scroll > 480) {
        color4.style.color = '#ffffff';
    } else {
        color4.style.color = '#000000';
    }

});
const color5 = document.querySelector(".link4")
window.addEventListener("scroll", function() {
    let scroll = window.pageYOffset;

    if (scroll > 480) {
        color5.style.color = '#ffffff';
    } else {
        color5.style.color = '#000000';
    }

});