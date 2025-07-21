<?php

function addScore($score1, $score2, $score3) {
    $total = $score1 + $score2 + $score3;
    if ($total >= 210) {
        echo $total . '点なので合格です';
    } else {
        echo $total . '点なので不合格です';   
    }
}

echo (addScore(80, 60, 90));

echo '<br/>';

function exam($score1, $score2, $score3) {
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo $total . "点なので合格です";
    }
        else {
            echo $total . "点なので不合格です";
        }
}

echo exam(60, 60, 80);
echo '<br/>';


function triangle($base, $height) {
    $areaTriangle = $base * $height / 2 ;
    return $areaTriangle;
}
function square($base, $height) {
    $areaSquare = $base * $height;
    return $areaSquare;
}
function trapezoid($base, $base2, $height) {
    $areaTrapezoid = ($base + $base2) * $height/ 2;
    return $areaTrapezoid;
}

echo triangle(2, 4) . "\n";
echo square(20, 40) . "\n";
echo trapezoid(20, 20, 40);

$people = [
    ['Taro', 25, 'man'],
    ['Jiro', 20, 'man'],
    ['hanako', 16, 'women']
    ] ;

    foreach ($people as $person) {
        echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br/>';
    }