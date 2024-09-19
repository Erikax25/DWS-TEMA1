<?php

function oddList(int $start, int $end) : void {
    for($i=$start; $i<=$end; $i++) {
        if ($i % 2 !== 0) {
            echo $i . "\n";
        }
    }
}

oddList(5,14);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1></h1>
    </body>
</html>