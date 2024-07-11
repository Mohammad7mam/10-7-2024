<?php 
echo "<form method='GET'>
    <input type='text' name='search' placeholder='Enter URL'>
    <button type='submit'>Go</button>
</form>";

// Handle URL redirection
if (isset($_GET["search"])) {
    $url = htmlspecialchars($_GET["search"]);
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: $url");
        exit();
    } else {
        echo "Invalid URL.";
    }
}
?>
