<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@4.0.0/destyle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="./style.css">
  <script src="./behavior.js" defer></script>
</head>

<body>
  <div class="container">
  <?php 
    $inputs = [
        'name'  => htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'),
        'pass'  => $_POST['pass'] ?? '',
        'pass2' => $_POST['pass2'] ?? '',
    ];

    // エラー内容を配列にする。初期化。
    $errors = [];
    // エラーがあった場合に拾う。
    if ($inputs['name'] === '') {
        $errors[] = 'スタッフ名が入力されていません。';
    }
    if ($inputs['pass'] === '') {
        $errors[] = 'パスワードが入力されていません。';
    }
    if ($inputs['pass'] !== $inputs['pass2']) {
        $errors[] = 'パスワードが一致しません。';
    }

    if (!empty($errors)) {
      echo '<ul class="out-put-error">';
      foreach ($errors as $error) {
        echo '<li>' . $error . '</li>';
      }
      echo '</ul>';
      echo <<<HTML
    <form>
      <input type="button" onclick="history.back()" value="戻る">
    </form>
    HTML;
      // エラー時に処理を終了
      exit;
    }

    $hashed_pass = password_hash($inputs['pass'], PASSWORD_DEFAULT);

    echo '<div class="result--">' . $inputs["name"] . '</div>';
    echo <<<HTML
    <form method="post" action="staff_add_done.php">
      <input type="hidden" name="name" value="{$inputs['name']}">
      <input type="hidden" name="pass" value="{$hashed_pass}">
      <input type="button" onclick="history.back()" value="戻る">
      <input type="submit" value="OK">
    </form>
    HTML;
  ?>
  </div>
</body>

</html>