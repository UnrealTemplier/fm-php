<?php

require_once "includes.php";

header("Content-type: application/json");
header("Access-Control-Allow-Origin: *");

$amount = $_GET["amount"] ?? 1;
$code = $_GET["code"] ?? "BTC";

$converter = new CryptoConverter($code);
$result = $converter->convert($amount);
echo "{\"usd\": $result}";