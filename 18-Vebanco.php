<!-- vẽ bàn cờ vua -->

<body style="text-align:center">
    <table border="1" width="800px" height="800px" cellspacing="0" cellpadding="0">
        <?php
        for ($r = 1; $r < 9; $r++) {
            echo "<tr>";
            for ($c = 1; $c < 9; $c++) {
                if ($r % 2 != 0) {
                    if ($c % 2 == 0) {
                        echo "<td bgcolor=#000000></td>";
                    } else {
                        echo "<td></td>";
                    }
                } else {
                    if ($c % 2 != 0) {
                        echo "<td bgcolor=#000000></td>";
                    } else {
                        echo "<td></td>";
                    }
                }
            }
            echo "</tr>";
        } ?>

    </table>
</body>