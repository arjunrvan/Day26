<html>
    <head></head>
    <body>
        Stars:<br/>
        <?php
            $num = 5;

            for ($i = 1; $i <= $num; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }

                echo "<br>";
            }

            for ($i = 1; $i <= $num; $i++) {
                for ($j = $num; $j >= $i; $j--) {
                    echo "*";
                }

                echo "<br>";
            }
        
        ?>
        
    </body>
</html>