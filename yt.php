<?php
$output = shell_exec("youtube-dl -f best -g ".htmlspecialchars($_GET["id"])."");
header("Location: $output");
?>
