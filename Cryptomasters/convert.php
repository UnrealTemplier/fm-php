<!DOCTYPE html>
<title>Conversion Results</title>

<h1>Conversion Results</h1>

<?php

require_once "includes.php";

if (isset($_POST["amount"]) && isset($_POST["crypto"])) {
    $amount = $_POST["amount"];
    $crypto = $_POST["crypto"];

    $converter = new CryptoConverter($crypto);
    $result = $converter->convert($amount);

    echo "<h2>You will have $result USD</h2>";
} else {
    echo "<h2>Oopsie! It didn't work. Try again.</h2>";
}
