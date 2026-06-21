<?php
// Simple testing-web app
function greet($name) {
    return "Hello, " . htmlspecialchars($name);
}
$user = isset($_GET['name']) ? $_GET['name'] : "guest";
echo greet($user);
