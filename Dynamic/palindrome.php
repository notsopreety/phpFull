<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
<form method="post">
    <input type="text" name="inputString" placeholder="Enter a string" required>
    <input type="submit" name="check" value="Check">
</form>
<?php
if (isset($_POST['check'])) {
    $string = $_POST['inputString'];
    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "<p>$string is a Palindrome.</p>";
    } else {
        echo "<p>$string is NOT a Palindrome.</p>";
    }
}
?>
</body>
</html>
