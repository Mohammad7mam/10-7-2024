<?php
echo "<br><br>";

session_set_cookie_params([
    'lifetime' => 0,
]);

session_start();

if (!isset($_SESSION["refreshed_round"])) {
    $_SESSION["refreshed_round"] = 0;
}

$_SESSION["refreshed_round"]++;

session_write_close();

echo "User refreshed: " . $_SESSION["refreshed_round"];
echo "<br><br>";    
?>
