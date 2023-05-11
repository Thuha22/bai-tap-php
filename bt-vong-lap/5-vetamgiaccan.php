<?php
// Viết chương trình vẽ một tam giác cân rỗng bằng các dấu "*"

/**
 * Vẽ tam giác cân rỗng
 * @param int $n
 * @return
 */
function veTamGiac(int $n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= 2 * $n - 1; $j++) {
            if ($i == $n || $j == $n + 1 - $i || $j == $n - 1 + $i) {
                echo "*";
            } else {
                echo "&nbsp&nbsp";
            }
        }
        echo "<br>";
    }
    return;
}

echo veTamGiac(12);
