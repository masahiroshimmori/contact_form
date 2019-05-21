<?php
//フォームのボタンが押されたら
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["name"];
  $furigana = $_POST["furigana"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $sex = $_POST["sex"];
  $item = $_POST["item"];
  $content = $_POST["content"];
}

if(isset($_POST["submit"])){
  mb_language("ja");
  mb_internal_encoding("UTF-8");
  mb_send_mail("shinmasa0412@yahoo.co.jp","メール送信テスト","メール本文");
  $subject = "[自動送信]お問い合わせ内容の確認";
  $body = <<<EOM
{$name} 様
お問い合わせありがとうございます。
以下の内容のお問い合わせ内容を、メールにて確認させていただきました。
＝＝＝＝＝＝＝＝＝＝＝＝＝
【お名前】
{$name}

【ふりがな】
{$furigana}

【メールアドレス】
{$email}

【電話番号】
{$tel}

【性別】
{$sex}

【項目】
{$item}

【お問い合わせ内容】
{$content}
＝＝＝＝＝＝＝＝＝＝＝＝＝

内容をご確認の上、回答させていただきます。
しばらくお待ちください。
EOM;

$fromEmail = "contact@dream-php-seminar.com";
$fromeName = "お問い合わせテスト";
$header = "From".mb_encode_mimeheader($fromeName)."<{$fromeEmail}>";
mb_send_mail($email,$subject,$body,$header);
header("Location:./thanks.php");
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>お問い合わせ内容確認画面</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div><h1>Company Name</h1></div>
    <div><h2>お問い合わせ内容</h2></div>
    <div>
      <form action="thanks.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="furigana" value="<?php echo $furigana; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="tel" value="<?php echo $tel; ?>">
        <input type="hidden" name="sex" value="<?php echo $sex; ?>">
        <input type="hidden" name="item" value="<?php echo $item; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">
        <h1 class "contact-title">お問い合わせ内容の確認</h1>
        <p>お問い合わせ内容はこちらでよろしいでしょうか？<br>よろしければ「送信する」ボタンを押してください。</p>
        <div>
          <div>
            <label>お名前</label>
            <p><?php echo $name; ?></p>
          </div>
          <div>
            <label>ふりがな</label>
            <p><?php echo $furigana; ?></p>
          </div>
          <div>
            <label>メールアドレス</label>
            <p><?php echo $email; ?></p>
          </div>
          <div>
            <label>電話番号</label>
            <p><?php echo $tel; ?></p>
          </div>
          <div>
            <label>性別</label>
            <p><?php echo $sex; ?></p>
          </div>
          <div>
            <label>問い合わせ項目</label>
            <p><?php echo $item; ?></p>
          </div>
          <div>
            <label>問い合わせ内容</label>
            <p><?php echo nl2br($content); ?></p>
          </div>
        </div>
          <input type="button" value="内容を修正する" onclick="history.back(-1)">
          <button type="submit" name="submit">送信する</button>
        </form>
    </div>
  </body>
</html>
