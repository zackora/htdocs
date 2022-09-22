    var numClick = 0;
function random1() {
    var num = Math.floor(Math.random() * 2);
        if (num == 1) {
            num = Math.floor(Math.random() * 2);
        }
        if (num == 1) {
            num = Math.floor(Math.random() * 2);
        }
        if (num == 1) {
            num = Math.floor(Math.random() * 2);
        }
        if (num == 1) {
            num = Math.floor(Math.random() * 2);
        }
        if (num == 1) {
              const elm = document.getElementById('idou')
              console.log(elm.type);
              elm.type = "submit";
        }
        if (num == 0) {
            const elm = document.getElementById('idou')
            console.log(elm.type);
            elm.type = "hidden";
        }
    document.getElementById("sendmail1").innerHTML = num;
    numClick = numClick +1;
}

function random2() {
    var num = Math.floor(Math.random() * 10);
    document.getElementById("sendmail2").innerHTML = num;
}

function random3() {
    var num = Math.floor(Math.random() * 10);
    document.getElementById("sendmail3").innerHTML = num;
}

function random4() {
    var num = Math.floor(Math.random() * 10);
    document.getElementById("sendmail4").innerHTML = num;
}

function random5() {
    var num = Math.floor(Math.random() * 10);
    document.getElementById("sendmail5").innerHTML = num;
}

function random6() {
    var num = Math.floor(Math.random() * 10);
    document.getElementById("sendmail6").innerHTML = num;
}

function random7() {
    var num = Math.floor(Math.random() * 10);
    document.getElementById("sendmail7").innerHTML = num;
}

function sekaiCount() {
    var kaisu = document.getElementById('kaisu');
    kaisu.innerHTML = "Congratulations!<br>あなたは、" + numClick + "回目で<br>β世界線へ移動した。";
}
