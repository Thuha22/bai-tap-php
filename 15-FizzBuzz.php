<!-- Viết một chương trình để in ra các số từ 1 đến 100.
 Nhưng đối với các số chia hết cho 3 thì in ra chữ “Fizz” thay vì hiển thị số đó và đối với các số chia hết cho 5 thì in ra chữ “Buzz”.
 Đối với các số vừa chia hết cho 3 và 5 thì in ra chữ “FizzBuzz”.-->

<?php

$i = "";
function FizzBuzz($i)
{
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz <br>";
        } elseif ($i % 3 == 0) {
            echo "Fizz <br>";
        } elseif ($i % 5 == 0) {
            echo "Buzz <br>";
        } else {
            echo $i . "<br>";
        }
    }
}

echo FizzBuzz($i);
