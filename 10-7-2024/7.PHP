<?php
session_start(); 


if (!isset($_SESSION["views"])) {
    $_SESSION["views"] = 0;
}

$_SESSION["views"]++;
$views = $_SESSION["views"];
echo "User views: $views";
session_write_close(); 
?>
<script>
localStorage.setItem("views", <?php echo $views; ?>);
</script>
<br><br>
