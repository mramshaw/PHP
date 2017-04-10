<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PHP Application - Timer</title>
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <section class="header">
        <h1>Test of Timer</h1>

<?php

$sleep_time = 5; // TODO: Accept this as a variable

// set the time limit higher than the sleep value
//   so that the script does not time out
set_time_limit($sleep_time + 5);

echo "<p>Sleep Started at " . date('h:i:s') . "</p>\n";

$return = sleep($sleep_time);
echo "<p>Sleep return code: " . $return . "</p>\n";

echo "<p>Sleep Ended at " . date('h:i:s') . "</p>\n";
?>

    </section>
</body>
</html>
