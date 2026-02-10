<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>テストの平均点を計算しよう</title>
</head>

<body>
    <p>
        <?php
        //　変数に点数を代入する
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

        // 点数の合計点を出力
        $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
        echo "10人の合計点は{$total}点です。";

        echo '<br>';

        // 点数の平均点を出力
        $average = ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10) / 10;
        echo "10人の平均点は{$average}点です。";

        ?>
    </p>
</body>