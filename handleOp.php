
<?php
if (isset(
    $_GET['submit']
)) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operation = $_GET["operation"];
    if (!empty($num1) && !empty($num2) && !empty($operation)) {
        echo "You entered: $num1 $operation $num2 <br>";
        $result = 0;
        if ($operation == "add") {
            $result = $num1 + $num2;
        } elseif ($operation == "subtract") {
            $result = $num1 - $num2;
        } elseif ($operation == "multiply") {
            $result = $num1 * $num2;
        } elseif ($operation == "divide") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else
                echo "Error! Division by zero is not allowed.";
        } elseif ($operation == "modulus") {
            if ($num2 != 0) {
                $result = $num1 % $num2;
            } else
                echo "Error! Division by zero is not allowed.";
        }
        echo "Result: $result";
    } else {
        echo "Please fill in all fields";
    }
} else {
    echo "Please fill in all fields";
    // Display the form if it hasn't been submitted yet
    echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='get'>
    <label for='num1'>Number 1:</label>
    <input type='number' id='num1' name='num1'><br><br>
    <label for='num2'>Number 2:</label>
    <input type='number' id='num2' name='num2'><br><br>
    <label for='operation'>Operation:</label>
    <select id='operation' name='operation'>
    <option value='add'>Add</option>
    \
    <option value='subtract'>Subtract</option>
    \
    <option value='multiply'>Multiply</option>
    \
    <option value='divide'>Divide</option>
    </select><br><br>
    <input type='submit' name='submit' value='Calculate'/>
    </form>";
}
?>