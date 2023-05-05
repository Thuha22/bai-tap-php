<?php
// Viết chương trình kiểm tra xem ký tự ch là nguyên âm, phụ âm, ký số (ký tự số) hay ký tự khác.

/**
 * Kiểm tra xem ký tự ch là nguyên âm, phụ âm, ký số (ký tự số) hay ký tự khác.
 * @param string $ky_tu kiểm tra ký tự
 * @return string
 */
function VowelConsonants(string $ky_tu): string
{
    if (($ky_tu >= "A" && $ky_tu <= "Z") || ($ky_tu >= "a" && $ky_tu <= "z")) {
        switch ($ky_tu) {
            case "U":
            case "u":
            case "E":
            case "e":
            case "O":
            case "o":
            case "A":
            case "a":
            case "I":
            case "i":
                return "$ky_tu là nguyên âm";
                break;
            default:
                return "$ky_tu là phụ âm";
        }
    } elseif ($ky_tu >= "0" && $ky_tu <= "9") {
        return "$ky_tu là ký tự số";
    } else {
        return "$ky_tu là ký tự khác";
    }
}

echo VowelConsonants("A");
//expect: A là nguyên âm
echo VowelConsonants("p");
//expect: p là phụ âm
echo VowelConsonants("3");
//expect: 3 là ký tự số
echo VowelConsonants("*");
//expect: * là ký tự khác
