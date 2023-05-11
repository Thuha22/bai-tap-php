<!-- Viết chương trình in ra bảng mã ASCII -->
<table border="1" style="text-align: center;">
    <tr>
        <td width="100px">DEC</td>
        <td width="100px">Char</td>
    </tr>
    <tr>
        <td>
            <?php
            for ($i = 0; $i <= 127; $i++) {
                echo "$i<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for ($i = 0; $i <= 127; $i++) {
                $a = chr($i);
                echo   "$a<br>";
            }
            ?>
        </td>
    </tr>
</table>