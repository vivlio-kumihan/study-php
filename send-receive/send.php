<?php
$name = "hello, hello!";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/destyle.css">
  <link rel="stylesheet" href="./assets/css/fonts.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="https://kit.fontawesome.com/678cad97f5.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="./assets/js/behavior.js" defer></script>
</head>

<body>
  <div id="container">
    <form action="./comfirm.php" method="POST">
      <dl>
        <dt>次のページへデータを渡してみる。</dt>
        <dd>
          <div class="wrapper">
            <label for="name">名前</label>
            <input type="text" id="name" name="name">
          </div>
          <div class="wrapper">
            <label for="hobby">趣味</label>
            <input type="text" id="hobby" name="hobby">
          </div>
        </dd>
        <dd>
          <input type="submit" value="確認する。" >
        </dd>
      </dl>
    </form>
  </div>
</body>

</html>