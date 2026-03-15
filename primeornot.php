<?php
$number = 17;

$isPrime = true;

if ($number <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo $number . " is a Prime number.";
} else {
    echo $number . " is not a Prime number.";
}
?>
