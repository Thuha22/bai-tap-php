<!-- Cho xâu các ký tự 0, 1 độ dài lẻ và không vượt quá 200001.Hãy xác định vị trí ký tự cần xóa để xâu trở thành bình đẳng.
  Nếu không có cách xóa thì đưa ra số 0. Nếu có nhiều cách xóa thì đưa ra cách xóa với số thứ tự vị trí cần xóa là nhỏ nhất.
  (Xâu các ký tự 0 và 1 được gọi là bình đẳng nếu có độ dài chẵn và số lượng ký tự 1 ở vị trí chẵn bằng số lượng 1 ở vị trí lẻ. Ví dụ, xâu '011011' là xâu bình đẳng, cònxâu '011101' - không bình đẳng.)-->
<?php

/**
 * Xác định vị trí xóa ký tự 1
 * @param string $n
 * @return int 
 */
function viTriXoa(string $n): int
{
    $arr = str_split($n);
    // var_dump($arr);
    $countle = 0;
    $countchan = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($i % 2 == 0 && $arr[$i] == 1) {
            $countle++;
        } elseif ($i % 2 != 0 && $arr[$i] == 1) {
            $countchan++;
        }
    }
    // var_dump($countle);
    // var_dump($countchan);
    if ($countle > $countchan && $countle - $countchan <= 1) {
        for ($i = 0; $i <= count($arr); $i++) {
            if ($i % 2 == 0 && $arr[$i] == 1) {
                return $i + 1;
            }
        }
    } elseif ($countchan > $countle && $countchan - $countle <= 1) {
        for ($i = 0; $i <= count($arr); $i++) {
            if ($i % 2 != 0 && $arr[$i] == 1) {
                return $i + 1;
            }
        }
    } else {
        return 0;
    }
}


echo viTriXoa("01011");
// expect:2
echo viTriXoa("01010");
// expect:0
