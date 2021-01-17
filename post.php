<?php
    // DBアクセスするための道具を用意
    $dsn =  'mysql:dbname=heroku_e6179ad37a6d96b;host=us-cdbr-east-03.cleardb.com;charset=utf8mb4';
    $username = 'bc12c43204e33e';
    $password = '04bfef93';
    $pdo = new PDO($dsn, $username, $password);

//    INSERT INTO `posts` (`user_name`, `posted`, `contents`) VALUES
    $stmt = $pdo->prepare("INSERT INTO `posts` (`userName`, `posted`, `contents`) VALUES
(?, NOW(), ?)");
    $stmt->execute([$_POST["userName"], $_POST["contents"]]);

    // 接続を閉じる
    $pdo = null;

    header('Location: index.php');
    exit;
