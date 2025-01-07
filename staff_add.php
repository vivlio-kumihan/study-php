<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
  <script src="./asetts/behavior.js" defer></script>
</head>

<body>
  <div class="container">
    <h2>staff add</h2>
    <form method="post" action="staff_add_check.php">
      <label for="">
        <span>スタッフ名を入力してください。</span>
        <input type="text" name="name">
      </label>
      <label for="">
        <span>パスワードを入力してください。</span>
        <input type="text" name="pass">
      </label>
      <label for="">
        <span>パスワードをもう一度入力してください。</span>
        <input type="text" name="pass2">
      </label>
      <div class="submit">
        <input class="submit__back" type="button" onclick="history.back()" value="戻る" />
        <input class="submit__send" type="submit" value="OK" />
      </div>
    </form>
  </div>
</body>

</html>