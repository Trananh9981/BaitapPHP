<?php
$a = 10;
$b = 15;
$c = 20;

function tinhGiaithua($n) {
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}
 
// tính giai thừa
echo ("Giai thừa của " . $a . " là: " . tinhGiaithua ( $a ) . "<br>");
echo ("Giai thừa của " . $b . " là: " . tinhGiaithua ( $b ) . "<br>");
echo ("Giai thừa của " . $c . " là: " . tinhGiaithua ( $c ) . "<br>");
?>