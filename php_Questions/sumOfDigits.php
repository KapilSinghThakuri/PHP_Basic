<?php
// Sum of Digits
    class Sum{
        function sumOfDigits($numbers)
        {
            $sum = 0;
            $stringNum = (String)$numbers;
            for ($i=0; $i < strlen($stringNum) ; $i++) {
                $sum += (int)$stringNum[$i];
            }
            return $sum;
        }
    }
    $sumOfNumbers = new Sum;
    $totalSum = $sumOfNumbers->sumOfDigits(12345);
    echo "Sum of numbers is $totalSum";
?>