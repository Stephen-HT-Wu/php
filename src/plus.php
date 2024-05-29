<?php
// 定義一個算數類別
class Arithmetic {
    // 定義一個加法函數
    public function add($a, $b) {
        return $a + $b;
    }
    public function minus($a, $b) : float {
        return $a-$b;
    }
    function isEven(int $number): bool {
        return $number % 2 === 0;
    }
}

// 創建算數類別的實例
$arithmetic = new Arithmetic();

// 測試加法函數
$num1 = 10;
$num2 = 20;
$result = $arithmetic->add($num1, $num2);
$result2 = $arithmetic->minus($num1, $num2);
$result3 = $arithmetic->isEven(4);
// 輸出結果
echo "The sum of $num1 and $num2 is: $result \n";
echo "$result2 \n";
echo "$result3 \n";
echo $arithmetic->isEven(4)."\n";
?>