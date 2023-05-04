<?php

function isTamGiac($a, $b, $c)
{
    if (($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
        return true;
    }
    return false;
}

echo isTamGiac(4, 6, 7) ? 'TRUE' : 'FALSE';
//expect: TRUE
echo isTamGiac(5, 2, 8) ? 'TRUE' : 'FALSE';
//expect: FALSE
