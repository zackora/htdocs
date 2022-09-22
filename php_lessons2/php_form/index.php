<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>お問い合わせフォーム</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="" action="check.php" method="post" id="inquiry">
            <h2>お問い合わせフォームメール</h2>
            <p>このフォームはphpの練習で作成したサンプルです。入力されたメールアドレス宛に自動送信される機能が付いています。よければお試しください。</p>

            <table summary="お問い合わせに関する入力項目とその入力欄">
                <tr>
                    <th><label for="name">お名前</label></th>
                        <td><input type="text" name="name" size="30" id="name" placeholder="例）山田太郎" class="text1"></td>
                </tr>
                <tr>
                    <th><label for="email">メールアドレス</label></th>
                        <td><input type="text" name="email" size="30" id="email" placeholder="例）xxx@example.com" class="text2"></td>
                </tr>
                <tr>
                    <th><label for="message">お問い合わせの内容</label></th>
                        <td><input type="text" name="message" size="30" id="message" placeholder="例）コメント" class="text3"></td>
                </tr>
            </table>
            <div class="submit">
                <input type="submit" name="" value="確認画面へ">
            </div>
        </form>
    </body>
</html>
