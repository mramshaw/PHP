<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PHP Application - Recurse</title>
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <section class="header">
        <h1>Test of Recursion</h1>

<?php

recurseDown("------------", 11, 1);
recurseUp("------------", 1, 12);

function recurseDown($dashes, $i, $n)
{
    if ($i > $n) {
        printDashes($dashes, $i);
        recurseDown($dashes, $i - 1, $n);
    }
}

function printDashes($dashes, $x) {
    echo substr($dashes, 1, $x)."<br>\r\n";
}

function recurseUp($dashes, $i, $n)
{
    if ($i < $n) {
        printDashes($dashes, $i);
        recurseUp($dashes, $i + 1, $n);
    }
}

?>

    </section>
</body>
</html>
