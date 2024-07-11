<?php
echo "<br><br>";
$starttime = microtime(true); 
for ($i = 0; $i < 100; $i++) {
    $empty = 0;
}
$endtime = microtime(true);
echo "<br>";
printf("Page loaded in %f seconds", $endtime - $starttime);
echo "<br>";    
?>

