<?php
// パスワードを記載したファイルの場所
echo __FILE__;
// /Applications/MANP/htdocs/php_test/mainte/test.php

// パスワード(暗号化)
echo '<br>';
echo(password_hash('password123', PASSWORD_BCRYPT));
// $2y$10$F/Xkf2PJGu4OfOEBg.ld4uZRPMgcNjJJEMeV9a6b3QuEUDeDsbKpe
?>