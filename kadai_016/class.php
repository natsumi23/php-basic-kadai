<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP16章課題</title>
</head>
<body>
<p>
<?php
// クラス定義
class Food {
    //プロパティ定義
    private $name;
    private $price;

    // コンストラクタ定義
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    //メソッド定義
    public function show_price(int $price){
        echo '<br>' . $this->price . '円';
    }
}

// インスタンス化
$food = new Food('おにぎり', 800);
// インスタンスの各プロパティ値出力
print_r ($food);
// メソッドへアクセス
$food->show_price(800);

?>
</p>
<!-- ################################################################## -->
<p>
<?php
// クラス定義
class Animal {
    //プロパティ定義
    private $name;
    private $height;
    private $weight;

    // コンストラクタ定義
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    //メソッド定義
    public function show_height(int $height){
        echo '<br>' . $this->height . 'cm';
    }
}

// インスタンス化
$animal = new Animal('ミニチュアダックスフンド', 100, 10);
// インスタンスの各プロパティ値出力
print_r ($animal);
// メソッドへアクセス
$animal->show_height(10);

?>
</p>

</body>
</html>