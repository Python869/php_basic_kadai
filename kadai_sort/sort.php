<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //数値を変数に格納
        $nums = [15, 4, 18, 23, 10];

        //配列と並べ順の関数を定義
        function sort_2way($array, $order){
            //並べ順が昇順か降順かで条件分岐
            if ($order === true) {
                echo  "昇順にソートします<br>";
                sort($array);
                //配列のデータを一行ずつ取り出す
                foreach ($array as $num) {
                    echo $num . "<br>";
                }
            } else {
                echo "降順にソートします<br>";
                rsort($array);
                foreach ($array as $num) {
                    echo $num . "<br>";
                }
            }
        }
        //関数を呼び出す
        sort_2way($nums, true);
        sort_2way($nums, false);
        ?>
    </p>
</body>