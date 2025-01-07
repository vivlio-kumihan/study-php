## htmlspecialchars()関数

この関数は、HTMLエンティティへの変換を行うため、クロスサイトスクリプティング（XSS）の防止や、HTML内での特殊文字をエスケープする際に使用されます。

```
$staff_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
```

### 引数の意味

|key|value|
|----|----|
|$staff_name|エスケープ対象の文字列。|
|ENT_QUOTES|シングルクォート (') とダブルクォート (") の両方をエスケープします。|
|ENT_SUBSTITUTE|無効なUTF-8文字を � に置き換えます。このオプションは安全性をさらに高めるために推奨されます。|
|'UTF-8'|使用する文字エンコーディングを指定します。日本語を含む多くの文字に対応するために UTF-8 を指定するのが一般的です。|

## password_hash()関数

```php
$hashed_password = password_hash($staff_pass, PASSWORD_DEFAULT);
```

|key|value|
|----|----|
|アルゴリズム|PASSWORD_DEFAULT は現在のデフォルトアルゴリズム（現在は bcrypt）を使用します。将来的に新しいアルゴリズムがデフォルトになる可能性がありますが、互換性は保たれます。|
|自動的にソルトを生成|ソルト（ランダムデータ）を自動生成してくれるので、追加で処理を行う必要はありません。|

### パスワードの検証が容易

以下を使用して、ハッシュ化されたパスワードを簡単に検証できます。

```php
if (password_verify($staff_pass, $hashed_password)) {
    echo 'パスワードが一致しました';
} else {
    echo 'パスワードが一致しません';
}
```

## ヒアドキュメントを使ってコードを見やすくする工夫

```php
  <?php
    ...
    ...
    $hashed_pass = password_hash($inputs['pass'], PASSWORD_DEFAULT);
    echo <<<HTML
    <form method="post" action="staff_add_done.php">
      <input type="hidden" name="name" value="{$inputs['name']}">
      <input type="hidden" name="pass" value="{$hashed_pass}">
      <input type="button" onclick="history.back()" value="戻る">
      <input type="submit" value="OK">
    </form>
    HTML;
  ?>
```