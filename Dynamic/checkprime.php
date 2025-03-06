<!DOCTYPE html>
<html>
<head><title>Prime Checker</title></head>
<body>
<form method="post">
    <input type="number" name="num" placeholder="Enter a number" required>
    <input type="submit" name="check" value="Check">
</form>
<?php
if (isset($_POST['check'])) {
    $num = $_POST['num'];
    $isPrime = $num > 1;    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }    
    echo $isPrime ? "$num is a Prime Number" : "$num is NOT a Prime Number";
}
?>
</body>
</html>
