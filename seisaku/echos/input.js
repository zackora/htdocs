export class InputHandler{
    constructor(sha){
        document.addEventListener("keydown",event => {
            switch (event.keyCode) {
                case 38: //キーボードの上ボタンが押された時
                    sha.up();
                    break;

            }
        })
    }
}
