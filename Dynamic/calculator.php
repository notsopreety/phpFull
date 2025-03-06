<!DOCTYPE html>
<html>
<head><title>Calculator</title></head>
<body>
<form method="post">
    <input type="number" name="num1" placeholder="Enter first number" required><br>
    <input type="number" name="num2" placeholder="Enter second number" required><br>
    <select name="operator">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select>
    <input type="submit" name="calculate" 
    value="Calculate">
</form>
<?php
if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    switch ($operator) {
        case "add": echo "Result: " . ($num1 + $num2); break;
        case "sub": echo "Result: " . ($num1 - $num2); break;
        case "mul": echo "Result: " . ($num1 * $num2); break;
        case "div": echo $num2 != 0 ? "Result: " . ($num1 / $num2) : "Cannot divide by zero"; break;
    }
}
?>
</body>
</html>
