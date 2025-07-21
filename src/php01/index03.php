<?php
$name = "Tanaka";
$last_name = "Yamada";
$first_name = "Saburo";

echo $name . "Jiro" . "<br/>";
echo $last_name . $first_name . "<br/>";

$a = 20;
$b = 5;

echo ($a > $b) . "<br/>"; 

echo ($a > 10 && $a <30) . "<br/>";

$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo --$a . "<br/>";
echo --$c . "<br/>";

$a = 7;
if($a === 5) {
    echo "\$aは5です" . "<br/>";
} else {
    echo "\$aは5以外です" . "<br/>";
}

$people = "Saburo";

switch ($people) {
    case "Taro";
    echo "太郎です";
    break;
    case "Jiro";
    echo "次郎です";
    break;
    case "Saburo";
    echo "三郎です";
    break;
}

echo "<br/>";

$a = 7;

$result = ($a == 7) ? "TRUE" : "FALSE";
echo $result . "<br/>";


for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . "<br/>";
}

for ($i = 2; $i <= 10; $i = $i+2) {
    echo $i . "<br/>";
}

$i = 1;
while ($i <= 20) {
    echo $i . "<br/>";
    $i++;
}

$count = 0;
while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . "<br/>";
    $count++;
}

$num = 0;
do {
    echo "num = " . $num . "<br/>";
    $num++;
}
while ($num < 3);

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz" . "<br/>";
    } elseif ($i % 3 == 0) {
        echo "Fizz" . "<br/>";
    } elseif ($i % 5 == 0) {
        echo "Buzz" . "<br/>";
    } else {
        echo $i . "<br/>";
    }
}

for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "●";
    }
    echo "<br/>";
}

for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j<4; $j++) {
        echo "★";
    }
    echo "<br/>";
}

function totalScore ($score1, $score2, $score3) {
    $total = $score1 + $score2 + $score3;
    if ($total >= 210) {
        echo "合計点は" . $total . "なので合格です";
    } else {
        echo "合計点は" . $total . "なので不合格です";
    }
}

echo totalScore(60, 70, 90) . "<br/>";

function triangleArea ($base, $height) {
    return ($base * $height / 2);
}

function squareArea ($base, $height) {
    return ($base * $height);
}

function trapezoidArea ($upperBase, $lowewBase, $height) {
    return (($upperBase + $lowewBase) * $height / 2);
}

echo triangleArea (2, 4) . "\n";
echo squareArea (2,4) . "\n";
echo trapezoidArea (2, 2, 4) . "\n";
echo "<br/>";

$people = [
    ["name" => "Taro",
    "age" =>"25",
    "sex" => "men"
    ],
    ["name" => "Jiro",
    "age" => "20",
    "sex" => "men"
    ],
    ["name" => "hanako",
    "age" => "16",
    "sex" => "women"
    ]
];

foreach ($people as $person) {
    echo $person ["name"] . "(" . $person["age"] . "歳" . $person["sex"] . ")" . "<br/>";
}

