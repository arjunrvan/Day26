<html>
    <head></head>
    <body>
        Integer Sum:<br/>
        <?php
            $numStart = 0;
            $numEnd = 30;
            $sum=0;

            for ($i = $numStart; $i <= $numEnd; $i++) {
                $sum += $i;
            }

            echo $sum;
        
        ?>
        
    </body>
</html>