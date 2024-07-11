<?php 

echo "<form method='GET'>
    <input type='number' name='num1' placeholder='First number'>
    <input type='text' name='op' placeholder='Operator'>
    <input type='number' name='num2' placeholder='Second number'>
    <button type='submit'>Calculate</button>
</form>";

if (isset($_GET["num1"], $_GET["num2"], $_GET["op"])) {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $op = $_GET["op"];
    $result = "You inserted the wrong operation";
    
    switch ($op) {
        case "*": $result = $num1 * $num2; break;
        case "/": $result = ($num2 != 0) ? $num1 / $num2 : "Division by zero error"; break;
        case "+": $result = $num1 + $num2; break;
        case "-": $result = $num1 - $num2; break;
    }

    echo $result . "<br>";
}
?>
