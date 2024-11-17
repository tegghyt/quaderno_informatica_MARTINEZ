<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
    <body>
        <a href="index.html">HOME QUADERNO</a>


        <h1>Tavola Pitagorica</h1>

        <table>
            <tr>
                <th></th>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>

            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";

                for ($j = 1; $j <= 10; $j++) {
                    $prodotto = $i * $j;
                    echo "<td>$prodotto</td>";
                }
                echo "</tr>";
            }
            ?>

        </table>
    </body>
</html>