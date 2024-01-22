<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせ</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問い合わせ確認</h1>

    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
            よろしければ「送信する」ボタンを押して下さい。
</p>
<div>名前<br>
<?php echo $_POST['name']; ?>
</div>

<div>メールアドレス<b>
<?php echo $_POST['mail']; ?>
</div>

<div>年齢<b>
<?php echo $_POST['age']."歳"; ?>
</div>

<div>コメント<br>
<?php echo $_POST['comments']; ?></div>

<div class="buttons">
    <form action="index.html">
        <input type="submit" class="button1" value="戻って修正お願いします"/>
    </form>

    <form action="insert.php" method="post">
        <input type="submit" class="button2" value="登録する" />
        <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
        <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
        <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
    </form>
</div>
</div>
</body>
</html>



