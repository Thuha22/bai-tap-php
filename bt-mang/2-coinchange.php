<?php
// Với một giá trị N, nếu chúng ta muốn đổi N xu và chúng ta có nguồn cung vô hạn đối với mỗi đồng xu có giá trị S = {S1, S2, .., Sm}, chúng ta có thể thực hiện bao nhiêu cách để thực hiện thay đổi? Thứ tự của các đồng xu không quan trọng.

$n = 10;
$s = [2, 5, 3, 6];
$sopt = count($s);

/**
 * Đếm các cách đổi n xu 
 * @param int $n, array $s
 * @return int 
 */
function countCases(array $s, int $sopt, int $n): int
{
    if ($n == 0) {
        return 1;
    } elseif ($n < 0) {
        return 0;
    } elseif ($n > 0 && $sopt <= 0) {
        return 0;
    }
    return countCases($s, $sopt - 1, $n) + countCases($s, $sopt, $n - $s[$sopt - 1]);
}

echo countCases($s, $sopt, $n);
//expect: 5
