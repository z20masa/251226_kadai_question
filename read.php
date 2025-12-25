<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
</head>
<body>

<?php

// ファイルを変数に格納
$filename = 'data.csv';
 
// fopenでファイルを開く（'r'は読み込みモード）
$fp = fopen($filename, 'r');

// whileで行末までループ処理
while (!feof($fp)) {

// fgetsでファイルを読み込み、変数に格納
$txt = fgets($fp);
 
// ファイルを読み込んだ変数を出力
echo $txt.'<br>';
}
// fcloseでファイルを閉じる
fclose($fp);

?>



</body>
</html>
