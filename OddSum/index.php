<html>
    <head></head>
    <body>
        Odd Sum:<br/>
        <?php
            $numStart = 30;
            $numEnd = 50;
            $sum=0;

            for ($i = $numStart; $i <= $numEnd; $i++) {
                if ($i % 2 != 0) {
                    $sum += $i;
                }
            }

            echo $sum;
        
        ?>
        
    </body>
</html>