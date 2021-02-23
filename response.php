<?php

$bday = $_POST['bday'] ?? '';
$username = $_POST['username'] ?? '';



echo "<h1>Autocomplet Test</h1>";

echo "<p>Birthday month:"  . $bday . "</p>";
echo "<p>Username:"  . $username . "</p>";

echo '<a href="index.php">Go back to the form</a>';

?>