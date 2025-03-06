<!DOCTYPE html>
<html>
<head><title>Even or Odd</title></head>
<body>
<form method="post">
    <input type="number" name="num" placeholder="Enter a number" required>
    <input type="submit" name="check" value="Check">
</form>
<?php
if (isset($_POST['check'])) {
    $num = $_POST['num'];
    echo $num % 2 == 0 ? "$num is Even" : "$num is Odd";
}
?>
</body>
</html>
