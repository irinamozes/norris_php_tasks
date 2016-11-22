<?php

function table_mult($nr, $nd) {
    if (gettype($nr) != 'integer' || gettype($nd) != 'integer') {
        echo 'Заданы не целые числа';
    } else {

        echo "<style>
        table {
            border: 2px solid black;
            border-collapse: collapse;
        }
        td {
            width: 60px;
            padding: 5px;
            text-align: right;
            border: 1px solid black;
            background: #E6E6FA;
        }
        </style>";

        echo "<table>";
        for ($i = 1; $i <= $nr; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $nd; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
};

table_mult(8, 6);

?>
