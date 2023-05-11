<?php
// Viết chương trình vẽ hình chữ nhật rỗng bằng các dấu "*"

/**
 * Vẽ hình chữ nhật rỗng
 * @param int $d,$r
 * @return
 */
function veHCN(int $d, int $r)
{
    for ($i = 1; $i <= $d; $i++) {
        for ($j = 1; $j <= $r; $j++) {
            if ($i == $d || $i == 1 || $j == 1 || $j == $r) {
                echo "*";
            } else {
                echo "&nbsp&nbsp";
            }
        }
        echo "<br>";
    }
    return;
}

echo veHCN(4, 5);
