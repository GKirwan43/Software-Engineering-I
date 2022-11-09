<?php
    function product($x, $y) {
        return $x * $y;
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Multiplication Table</title>
    <style>
        table, tr, td {
            border:1px solid black;
        }
    </style>
  </head>
  <body>
    <h1>Multiplication Table</h1>
    <table>
        <?php
            for ($x = 1; $x <= 100; $x++) {
                echo "<tr>";
                for ($y = 1; $y <= 100; $y++) {
                    echo "<td>".product($x, $y)."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
  </body>
</html>
