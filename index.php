<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>簡易お問い合わせフォーム</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/validate.js"></script>
  </head>
  <body>
    <div><h1>Company Name</h1></div>
    <div><h2>お問い合わせ</h2></div>
    <div>
      <form action="./confirm.php" name="form" method="post" onsubmit="return validate()">
        <h1 class="contact-title">お問い合わせ　内容入力</h1>
        <p>お問い合わせ内容をご入力の上、「確認ボタン」をクリックしてください。</p>
        <div>
          <div>
            <label>お名前<span>必須</span></label>
            <input type="text" name="name" placeholder="例）山田太郎" value="">
          </div>
          <div>
            <label>ふりがな<span>必須</span></label>
            <input type="text" name="furigana" placeholder="例）やまだたろう" value="">
          </div>
          <div>
            <label>メールアドレス<span>必須</span></label>
            <input type="text" name="email" placeholder="例）guest@example.com" value="">
          </div>
          <div>
            <label>電話番号<span>必須</span></label>
            <input type="text" name="tel" placeholder="例）00000000000" value="">
          </div>
          <div>
            <label>性別<span>必須</span></label>
            <input type="radio" name="sex" value="男性" checked>男性
            <input type="radio" name="sex" value="女性">女性
          </div>
          <div>
            <label>問い合わせ項目<span>必須</span></label>
            <select name="item">
              <option value="">お問い合わせ項目を選択してください</option>
              <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
              <option value="ご意見・ご感想">ご意見・ご感想</option>
            </select>
          </div>
          <div>
            <label>問い合わせ内容<span>必須</span></label>
            <textarea name="content" row="5" placeholder="お問い合わせ内容を入力"></textarea>
          </div>
        </div>
            <button type="submit">確認画面へ</button>
      </form>
    </div>
  </body>
</html>
