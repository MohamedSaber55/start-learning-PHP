
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
}
?>