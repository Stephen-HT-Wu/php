<?php
$a = 10;
$b = 20;
$c = 10;
$d = "10";

// 等於（==）
echo "\$a == \$b: " . var_export($a == $b, true) . "\n"; // 輸出: false
echo "\$a == \$c: " . var_export($a == $c, true) . "\n"; // 輸出: true
echo "\$a == \$d: " . var_export($a == $d, true) . "\n"; // 輸出: true

// 全等（===）
echo "\$a === \$b: " . var_export($a === $b, true) . "\n"; // 輸出: false
echo "\$a === \$c: " . var_export($a === $c, true) . "\n"; // 輸出: true
echo "\$a === \$d: " . var_export($a === $d, true) . "\n"; // 輸出: false

// 不等於（!=）
echo "\$a != \$b: " . var_export($a != $b, true) . "\n"; // 輸出: true
echo "\$a != \$c: " . var_export($a != $c, true) . "\n"; // 輸出: false
echo "\$a != \$d: " . var_export($a != $d, true) . "\n"; // 輸出: false

// 不全等（!==）
echo "\$a !== \$b: " . var_export($a !== $b, true) . "\n"; // 輸出: true
echo "\$a !== \$c: " . var_export($a !== $c, true) . "\n"; // 輸出: false
echo "\$a !== \$d: " . var_export($a !== $d, true) . "\n"; // 輸出: true

// 大於（>）
echo "\$a > \$b: " . var_export($a > $b, true) . "\n"; // 輸出: false
echo "\$b > \$a: " . var_export($b > $a, true) . "\n"; // 輸出: true

// 小於（<）
echo "\$a < \$b: " . var_export($a < $b, true) . "\n"; // 輸出: true
echo "\$b < \$a: " . var_export($b < $a, true) . "\n"; // 輸出: false

// 大於等於（>=）
echo "\$a >= \$b: " . var_export($a >= $b, true) . "\n"; // 輸出: false
echo "\$a >= \$c: " . var_export($a >= $c, true) . "\n"; // 輸出: true

// 小於等於（<=）
echo "\$a <= \$b: " . var_export($a <= $b, true) . "\n"; // 輸出: true
echo "\$a <= \$c: " . var_export($a <= $c, true) . "\n"; // 輸出: true
?>
