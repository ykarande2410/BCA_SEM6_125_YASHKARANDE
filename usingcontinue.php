<?php
$userNumber = 4; 

for ($i = 1; $i <= 10; $i++) {
    if ($i == $userNumber) {
        continue; 
    }
    echo $i . " ";
}
?>
