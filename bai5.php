<?php
 echo "<br/br/br/br>";
    $n = 3458;
    $ntach;
    $result = 0;
    $varNumber = $n;
    echo "Số vừa nhập: " . $n;
    for (; $n != 0;) {
        $ntach = $n % 10;
        $result += $ntach;
        $n /= 10;
    }
    echo "<br>";
    echo "Tổng các chữ số: " . $result;
    echo "<br>";
    echo "Các ước số của " . $varNumber . " là: ";
    for ($i = 1; $i <= $varNumber; $i++) {
        if ($varNumber % $i == 0) {
            echo "\t" . $i;
        }
    }
    echo "<br>";
    ?>