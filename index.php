<?php
echo 'Hello World';
$value = [1,2,3,4,5,6,7,8,9,10];
print_r($value);

// キャメルケース 最初は小文字、次は大文字
$userCount = 0;

// スネークケース 間に_を入れる
$user_count = 1;

// 変数名は内容が推測が出来るように命名する

// 定数名 値の書き換えが不可能
define("GOOGLE_URL", "https://www.google.co.jp");
echo GOOGLE_URL."\n";

// デバッグ方法
var_dump(GOOGLE_URL);
?>