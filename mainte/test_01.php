<?php
// パスワードを記載したファイルの場所
echo __FILE__;
// /Applications/MAMP/htdocs/php_test/mainte/.htpasswd
// パスワード(暗号化)
echo '<br>';
echo(password_hash('password123', PASSWORD_BCRYPT));
?>