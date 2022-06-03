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
const o_s_i_1 = document.querySelector(".o_s_i_1")
const o_main = document.querySelector(".o-main")
const o_s_i_2 = document.querySelector(".o_s_i_2")
const o_inbox = document.querySelector(".o-inbox")
const o_main_text = document.querySelector(".o-main-text")
    o_s_i_1.addEventListener("mouseover", () => {
        o_main.style.backgroundImage = "url('./img/cfns.png')";
        o_main_text.innerHTML = "<h3>共同プロジェクト</h3>別グループが行っていたシスコム様とのプロジェクトを引き継ぎ、<br>共同でインターネット被害啓発運動やコミュニティーサイトを制作・運営しています。";
        o_main_text.style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
    }, false);
    o_inbox.addEventListener("mouseleave", () => {
        o_main.style.backgroundImage = "url('./img/logo-top.png')";
        o_main_text.innerHTML = ""
        o_main_text.style.backgroundColor = 'transparent'
    }, false);
    o_s_i_2.addEventListener("mouseover", () => {
        o_main.style.backgroundImage = "url('./img/community.png')";
        o_main_text.innerHTML = "<h3>ホームページ制作</h3>当サイトやコミュニティーサイトなど、全てKTT Projects内で一から制作を行いました。<br>（Word Press等は一切使用していません）";
        o_main_text.style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
    }, false);
    o_inbox.addEventListener("mouseleave", () => {
        o_main.style.backgroundImage = "url('./img/logo-top.png')";
        o_main_text.innerHTML = ""
        o_main_text.style.backgroundColor = 'transparent'
    }, false);

    var admin_btn = document.querySelector(".admin_popup")
    admin_btn.addEventListener('click', function() {
        var result = confirm("管理者用ページにアクセスします\n不正アクセスは法律によって禁止され、IPアドレスは記録されます");
        if( result ) {
            window.open("../member/admin.html");
        }
        else {
            console.log('キャンセル');
        }
    })