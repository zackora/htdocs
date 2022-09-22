import { Sheer } from "./sha.js";
import { InputHandler } from "./input.js";
import { Act3 } from "./act3.js";

//minからmaxまでの範囲でランダムな整数を生成する関数
export function getRandomInt(min, max) {
    return Math.floor(min + Math.random() * (max - min + 1));
}

var gamestate = true; //もしfalseならゲーム描写が止まるようにする
var score = 0;

let canvas = document.getElementById('gameScreen');
let ctx = canvas.getContext("2d");

let backImg = document.getElementById('img_back'); //背景


const GAME_WIDTH = 800; //ゲームキャンバスの幅
const GAME_HEIGHT = 500; //ゲームキャンバスの高さ
const FADEIN_IMG = document.getElementById('img_over');

let sha = new Sheer(GAME_WIDTH, GAME_HEIGHT);
new InputHandler(sha);
let act3 = [];

let lastTime = 0;
let counter = 0;
let interval = 0;

function gameLoop(timestamp) {
    let deltaTime = timestamp - lastTime;
    lastTime = timestamp;

    ctx.drawImage(backImg, 0, 0, GAME_WIDTH, GAME_HEIGHT); //背景の描写

    sha.update(deltaTime);
    sha.draw(ctx);

    counter += deltaTime;
    if (counter > interval) { //800ミリ秒から２秒間隔でact3を生成
        act3.push(new Act3(GAME_WIDTH, GAME_HEIGHT));
        counter = 0;
        interval = getRandomInt(800, 2000); //インターバルを８００ミリ秒から２秒まで乱数に設定
    }

    ctx.font = "40px sans-serif"; //    スコアとして表示する文字の大きさとフォント
    ctx.fillText("Score:" + score, 320, 60); //スコアを(60,60)の位置に表示する

    for (var i = act3.length - 1; i >= 0; i--) {

        act3[i].update(deltaTime);
        act3[i].draw(ctx);

        //act3がSHAと当たったかどうかの判定
        if (act3[i].checkHit(sha.position.x, sha.position.y, sha.r,
            act3[i].position.x, act3[i].position.y, act3[i].r)) {

            //もし衝突したらact3で読み込んだ音を出す
            var playbomb = act3[i].audio.play();
            //フェードインさせる要素を取得
            const FADEIN_ELEM = document.getElementById('fadein');

            //スクロール時に要素をフェードインさせるイベントを設定する
            window.addEventListener('scroll', () => {
                //フェードインする要素の上部の位置を取得する
                const FADEIN_ELEM_TOP = FADEIN_ELEM.getBoundingClientRect().top;
                //ブラウザの高さを取得
                const WINDOW_HEIGHT = window.innerHeight;
                //画面に表示された時にフェードインさせる処理
                if (WINDOW_HEIGHT > (FADEIN_ELEM_TOP + 200)) {
                    FADEIN_ELEM.classList.add('fadein-after');
                } else {
                    FADEIN_ELEM.classList.remove('fadein-after');
                }
            });
            //ユーザー操作がなかった時に、DOMExceptionのエラーが起こるため
            if (playbomb !== undefined) {
                playbomb.then(_ => {

                })
                    .catch(error => {
                        console.log(error);
                    });
            }

            gamestate = false;

            sha.audio.muted = true; //ジャンプ音をミュート

        }
        //爆弾の位置がゲーム画面外に出たら爆弾の配列を削除
        if (act3[i].offScreen()) {
            score++;
            act3.shift();
        }
    }

    //ゲーム状態がfalseだったらゲームをストップ
    if (!gamestate) {
        document.write('<img src="images/lose.jpg" style=""><br>');
        document.write("Score:" + score);
        document.write('<br><a href="kaishi.html">リトライ</a><br>');
        document.write('<a href="index.html">スタート画面に戻る</a>');
        return;
    }
    requestAnimationFrame(gameLoop);
}
requestAnimationFrame(gameLoop);
