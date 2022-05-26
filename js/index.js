document.getElementById("color1")
window.addEventListener("scroll", function() {

    let scroll = window.pageYOffset;

    if (scroll > 400) {
        color1.style.backgroundColor = '#800000';
    } else {
        color1.style.backgroundColor = '#F2F2F2';
    }

});
document.getElementById("color1")
window.addEventListener("scroll", function() {

    let scroll = window.pageYOffset;

    if (scroll > 400) {
        color1.style.color = '#000000';
    } else {
        color1.style.color = '#FFFFFF';
    }

});