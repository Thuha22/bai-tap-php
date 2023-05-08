<table border="1">
    <tr>
        <td>Hệ thập phân (DEC)</td>
        <td>Hệ thập lục phân (HEX)</td>
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
                echo "$a<br>";
            }
            ?>
        </td>
    </tr>
</table>