<?php

$cookie_name = "user";
$cookie_value = "Mohammad";
setcookie($cookie_name, $cookie_value, time() + 3600, "/");

if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '$cookie_name' is set!<br>Value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '$cookie_name' is not set!";
}

setcookie($cookie_name, "", time() - 3600, "/");
echo "<br>Cookie '$cookie_name' has been deleted.";
?>
