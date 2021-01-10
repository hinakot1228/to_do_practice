<?php

// ファイルの読み込み
require_once('Models/task.php');

// データの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
$currentTime = date("Y/m/d H:i:s");
// date：PHPに組み込まれている関数（行われた時間を記録する）

// DBへのデータ保存
$task = new Task();
$task->create([$title, $contents, $currentTime]);

// リダイレクト：「POST」ボタンを押した後にトップページに戻る
header('location:index.php');
exit;


