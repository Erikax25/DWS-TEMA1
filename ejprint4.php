<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio Print 1</title>
    </head>
    <body>
        <?php
        $d = '25';
        $m = '04';
        $a = '2005';
        $s = sprintf("%s/%s/%s", $d, $m, $a);
        print $s;
        ?>
    </body>
</html>