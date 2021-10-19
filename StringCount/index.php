<html>
    <head></head>
    <body>
        String:<br/>
        <?php
            $strInput = "Hello there my name is Kevin";
            $strReplaced = preg_replace('/\s+/', '%', $strInput);

            echo $strReplaced."<br/>";
            echo "Number of spaces: ".substr_count($strInput, ' ');

        ?>
        
    </body>
</html>