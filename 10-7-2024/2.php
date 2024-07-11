<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculation Result</title>
</head>
<body>
    <h1>Calculation Result</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Cannot divide by zero";
                    exit;
                }
                break;
            default:
                echo "Invalid operation";
                exit;
        }
        echo "<p>Result: $result</p>";
    }
    ?>
    <a href="index.html">Back to Calculator</a>
</body>
</html>
