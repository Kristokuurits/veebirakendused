<!DOCTYPE html>
<html>
<head>
    <title>veebileht</title>
</head>
<body>
<?php

function isSafe($input) {
    return htmlspecialchars(strip_tags(trim($input))
}

$page = isset($_GET['page']) ? isSafe($_GET['page']) : '';

$allowedPages = ['page1', 'page2', 'page3', 'page4'];

if (in_array($page, $allowedPages)) {
    include("$page.html");
} else {
    echo "Lehte ei leitud!";
}
?>
</body>
</html>
