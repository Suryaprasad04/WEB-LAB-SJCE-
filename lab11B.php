<!DOCTYPE html>
<html>
<head>
    <title>Line Count</title>
</head>
<body>

<h2>Number of Lines in web.txt</h2>

<?php
$filename = "web.txt";

if (file_exists($filename)) {
    $lines = file($filename); // returns array of lines
    $count = count($lines);
    echo "Total Lines: $count";
} else {
    echo "File not found.";
}
?>

</body>
</html>
