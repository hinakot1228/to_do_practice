<?php

// ファイルの読み込み
require_once('Models/Task.php');

// データの受け取り
// 何を受け取る？
// タイトルとコンテンツを受け取る必要がある
  //ユーザーがformでデータ送信した値
$title = $_POST['title'];　// inputタグのname属性
$contents = $_POST['contents']; // textareaタグのname属性

  // データが作られた時間
$currentTime = date("Y/m/d H:i:s");
// date：PHPに組み込まれている関数（行われた時間を記録する）

// DBへの接続
  //dbconnect.phpに記載 → dbconnect.phpを読み込む作業が必要

// DBへのデータ保存
  // SQL文の発行
  // オブジェクト指向の出番
$task = new Task();
$task->create([$title, $contents, $currentTime]);

// リダイレクト：「POST」ボタンを押した後にトップページに戻る
header('location:index.php');
exit;


