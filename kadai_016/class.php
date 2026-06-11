<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //クラスを定義
        class Food
        {
            //プロパティ
            private $name;
            private $price;

            //コンストラクタ
            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price()
            {
                echo $this->price . '<br>';
            }
        }

        //インスタンス化
        $food = new Food('カレー', 500);

        //print_r関数で出力
        print_r($food);
        
        echo '<br>';
        
        //メソッドにアクセスして実行
        $food->show_price();
        ?>
    </p>
    <p>
        <?php
        //クラスを定義
        class Animal
        {
            //プロパティ
            private $name;
            private $height;
            private $weight;

            //コンストラクタ
            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            
            public function show_height()
            {
                echo $this->height . '<br>';
            }
        }
        //インスタンス化
        $animal = new Animal('犬', 50, 10);

        //print_r関数で出力
        print_r($animal);
        
        echo '<br>';

        //メソッドにアクセスして実行
        $animal->show_height();
        ?>
    </p>
</body>