<?php
// php scope

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="handleOp.php" method="GET">
        <input type="text" name="num1" placeholder="Enter first number">
        <input type="text" name="num2" placeholder="Enter second number">
        <select name="operation" id="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
            <option value="modulus">Modulus</option>
            <!-- <option value="exponent">Exponent</option>
            <option value="floor">Floor</option>
            <option value="ceil">Ceil</option>
            <option value="round">Round</option>
            <option value="sqrt">Sqrt</option>
            <option value="pow">Pow</option>
            <option value="sin">Sin</option>
            <option value="cos">Cos</option>
            <option value="tan">Tan</option>
            <option value="log">Log</option>
            <option value="log10">Log10</option>
            <option value="log1p">Log1p</option>
            <option value="exp">Exp</option>
            <option value="abs">Abs</option>
            <option value="max">Max</option>
            <option value="min">Min</option>
            <option value="sinh">Sinh</option>
            <option value="cosh">Cosh</option>
            <option value="tanh">Tanh</option>
            <option value="acos">Acos</option>
            <option value="asin">Asin</option> -->
        </select>
        <input type='submit' name='submit' value='Calculate' />
    </form>
</body>

</html>