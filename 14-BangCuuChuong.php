<!--bảng cửu chương-->

<table border="1px">
    <tr>
        <?php
        for ($n = 1; $n < 10; $n++) {
            echo "<td>";
            for ($i = 1; $i <= 10; $i++) {
                $tich = $n * $i;
                echo "$n x $i = $tich <br>";
            }
            echo "</td>";
        } ?>
    </tr>
</table>