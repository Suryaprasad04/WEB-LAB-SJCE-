<!DOCTYPE html>
<html>
<head>
    <title>Read File</title>
</head>
<body>

<h2>Contents of web.txt</h2>

<?php
$filename = "web.txt";

if (file_exists($filename)) {
    $contents = file_get_contents($filename);
    echo "<pre>$contents</pre>";
} else {
    echo "File not found.";
}
?>

</body>
</html>
