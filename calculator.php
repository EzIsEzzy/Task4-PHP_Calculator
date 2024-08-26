<?php
$result = 0;
function calc($num1, $num2, $operator)
{
    global $result;
    switch ($operator) {
        case '+':
            $result= $num1 + $num2; break;
        case '-':
            $result= $num1 - $num2; break;
        case '*':
            $result= $num1 * $num2; break;
        case '/':
            if ($num2 != 0)
            $result= $num1 / $num2;
            else
            $result= "Error! Division by zero is not allowed.";
        break;
        case '%':
            if ($num2 != 0)
            $result= $num1 % $num2;
            else
            $result= "Error! Division by zero is not allowed.";
        break;
        default:
        $result= "Error! Invalid operator.";
        break;
    }
}
if (isset($_GET['op']))
{
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $op = $_GET['op'];
    calc($num1, $num2, $op);
}

$num1 = 0; $num2 = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>A Simple PHP Caluclator!</h1>
    <form action="calculator.php?num1=<?php $num1 ?>&num2=<?php $num2 ?>&op=<?php $op ?>" method="get">
        <input type="text" name="num1" value="<?= $num1 ?>" placeholder="1st number" class="num_txt"> <br>
        <input type="text" name="num2" value="<?= $num2 ?>" placeholder="2nd number" class="num_txt"> <br>
        <input type="text" name="result" class="num_result" value="<?= $result ?>" disabled>
        <div style="margin: 2px;">
        <input type="submit" class="opbutton" name="op" value="/">
        <input type="submit" name="op" class="opbutton" value="*">
        <input type="submit" name="op" class="opbutton" value="-">
        <input type="submit" name="op" class="opbutton" value="+">
        <input type="submit" name="op" class="opbutton" value="%">
        </div>
    </form>
    </div>
</body>
</html>