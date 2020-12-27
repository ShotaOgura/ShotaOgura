<html>
    <header>
        <title>計算してくれるサイトっぽい</title>
    </header>
    <body>

<?php
    // POSTで受け取った情報（文字列）を$birthdayに格納
    $birthday = $_POST['birthday'];
    

    // $birthdayの文字列を元に、DateTimeクラスの情報を作成？変換？
    $birthdayDt = new DateTime($birthday);
    

    // 現在時刻をDateTimeクラスで取得
    $now = new DateTime();
    
    $dateDiff = $now->diff($birthdayDt);
    $diffYearsStr = $dateDiff->format('%y 歳 %m ヶ月 %d 日');
?>

入力された生年月日 : <?php echo (string)$birthday ?>
<br>
現在の年月日 : <?php echo $now->format("Y/m/d") ?>
<br>
あなたは、<?php echo $diffYearsStr ?> です!!!


<form action="index.php" method="get">
<input type="submit" value="戻る">
</form>

    </body>
</html>