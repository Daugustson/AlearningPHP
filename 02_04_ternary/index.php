<?php



$is_logged_in = true;
$name = 'Dayn';
echo "Welcome" . ($is_logged_in ? " back!" : "!");
echo "<br>";
$message = $is_logged_in ? "welcome Back!": "Hello There"; 
//$name = $name ?: 'Joe';
$name = isset($name ) ? $name: 'Joe';
echo $message;
echo "<br>";

echo $name;
echo "<br>";
