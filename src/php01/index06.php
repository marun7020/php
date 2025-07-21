<?php
for ($i = 0; $i <= 10; $i = $i+2) {
    echo $i . '<br/>';
}

$count = 0;
while($count<20) {
    $count += 1;
    echo $count . '<br/>';
}

$i = 0;
while ($i < 10) {
    if ($i == 5) {
        break;
    }
    echo $i;
    $i++;
} 

echo '<br/>';

$count = 0;
while ($count <= 100) {
    if ($count == 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . '<br/>';
    $count++;
}

$num = 0;
do {
    echo "num = " . $num . '<br/>';
    $num++;  
} while($num <= 2);


for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0){
        echo 'FizzBuzz' . '<br/>';
    } elseif ($i % 3 == 0) {
        echo 'Fizz' . '<br/>';
    } elseif ($i % 5 == 0) {
        echo 'Buzz' . '<br/>';
    } else {
        echo $i . '<br/>';
    }
}