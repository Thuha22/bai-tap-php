<?php

/**
 * 15. Viết chương trình giải bài toán cổ điển sau:
 * Trăm trâu, trăm cỏ
 *Trâu đứng ăn năm
 * Trâu nằm ăn ba,
 * Ba trâu già ăn một
 * Hỏi mỗi loại trâu có bao nhiêu con.
 */

/**
 * Tính số trâu đứng($x), trâu nằm($y), trâu già($z)
 * @param int $animal, $grass
 * @return string
 */
function giaiToan(int $animal, int  $grass): string
{
    $str = "";
    for ($x = 1; $x <= ($grass / 5); $x++) {
        for ($y = 1; $y <= ($grass / 3); $y++) {
            $z = $animal - $x - $y;
            if (5 * $x + 3 * $y + $z / 3 == $grass && $z % 3 == 0) {
                $str .= "($x,$y,$z) hoặc ";
            }
        }
    }
    return $str;
}

// echo giaiToan();
// //expect: (4,18,78) (8,11,81) (12,4,84)

?>
<form action="" method="post">
    <input type="number" name="trau" value="" placeholder="Nhập tổng số trâu:">
    <input type="number" name="co" value="" placeholder="Nhập số cỏ:">
    <input type="submit">
</form>

<?php
if (isset($_POST['trau']) && isset($_POST['co'])) {
    $animal = $_POST['trau'];
    $grass = $_POST['co'];
    echo "Số trâu đứng, trâu nằm , trâu già lần lượt là " . giaiToan($animal, $grass);
}
?>