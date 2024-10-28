<!DOCTYPE html>
<title>Conversion Results</title>

<h1>Conversion Results</h1>

<?php

if (isset($_POST["amount"]) && isset($_POST["crypto"])) {
    $amount = $_POST["amount"];
    $crypto = $_POST["crypto"];

    echo "<p>You want to convert $amount $crypto</p>";
} else {
    echo "<h2>Oopsie! It didn't work. Try again.</h2>";
}
