<?php

#while

echo "while: ";
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}

#do...while

echo '<br>do....while: ';
$a = 0;
do {
    # code...
    echo $a;
    $a++;
} while ($a <= 10);

#for
echo '<br>for: ';
for ($i = 0; $i < 10; $i++) {
    # code...
    echo $i;
}

#foreach
echo '<br>foreach: ';
$i = [0,1,2,3,4,5,6,7,8,9];
foreach ($i as $key) {
    # code...
    echo $key;
}