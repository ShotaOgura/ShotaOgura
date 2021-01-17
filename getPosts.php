<?php

function get(){
    // DBアクセスするための道具を用意
    $dsn =  'mysql:dbname=heroku_e6179ad37a6d96b;host=us-cdbr-east-03.cleardb.com;charset=utf8mb4';
    $username = 'bc12c43204e33e';
    $password = '04bfef93';
    $pdo = new PDO($dsn, $username, $password);

    // ユーザー入力を伴わないクエリに関しては単に PDO::query メソッドを実行すればいいだけです．返り値は PDOStatement となります．
    $res = $pdo->query('SELECT * FROM posts');

    // 接続を閉じる
    $pdo = null;

    return $res;

}