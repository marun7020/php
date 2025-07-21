<?php

$people = [
    ['Taro', 25, 'man'],
    ['Jiro', 20, 'man'],
    ['hanako', 16, 'women']
    ] ;

foreach ($people as $person) {
     echo $person[0] . "\n" . '(' . $person[1] . '歳' . $person[2] . ')' . '<br/>';
    }

?>