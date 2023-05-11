<?php
//Hãy thực hiện thuật toán giải nén xâu theo quy tắc sau: giả sử xâu nén là "10a2b3c" thì sẽ được giải nén thành là "aaaaaaaaaabbccc"
// /https://www.google.com/search?q=b%C3%A0i+t%E1%BA%ADp+php+gi%E1%BA%A3i+n%C3%A9n+x%C3%A2u&rlz=1C1GCEU_enVN1004VN1005&oq=b%C3%A0i+t%E1%BA%ADp+php+gi%E1%BA%A3i+n%C3%A9n+x%C3%A2u&aqs=chrome..69i57j33i160l5.14832j0j7&sourceid=chrome&ie=UTF-8#fpstate=ive&vld=cid:da446081,vid:ek9fSYBTX0g
function giaiNen(string $n)
{
    $t = strpos($n, '0');
    var_dump($t);
}

echo giaiNen("10a2b3c");
