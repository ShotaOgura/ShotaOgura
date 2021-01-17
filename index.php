<?php
require 'getPosts.php';
$data = (get());

echo '
<html>
<header>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<title>1ちゃんねる</title>
</header>
    <body>
        <h3 style="text-align:center">1ちゃんねる</h3>
        <h5 style="text-align:center">日本最古のインターネット掲示板です。</h5>
        <div class="post-history">
        ';

        
        foreach( $data as $value ) {

        $postedDateTime = new DateTime($value['posted']);
        // 日本時間に変換
        $postedDateTime = $postedDateTime->add(new DateInterval('PT9H'));

         echo '
            <li class="frame post">'
                 . "$value[contents]<br>" . '<br>
                    <div class="post dt">' . $postedDateTime->format('Y/m/d H:i:s') . '</div><div class="post name">' . $value['userName'] .'</div><br>
            </li>
            ';
        };
        echo '
        </div>

        <div class="post-form">
        <form action="post.php" method="post">
            <label id="userName">名前</label>
            <input id="userName" type="text" name="userName" maxlength="6">
            <br>
            <label id="contents">投稿内容</label>
            <textarea id="contents" name="contents"></textarea>
            <br>
            <div style="text-align:center"><input type="submit" value="投稿する"></div>
        </form>
        </div>
    <link rel="stylesheet" href="board.css">
    </body>
</html>
';