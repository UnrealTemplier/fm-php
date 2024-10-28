<?php

function helloWorld() {
    echo "Hello, world!\n";
}

helloWorld();

function calculateTax(float $price = 0, float $taxRate = 0.05, string $taxName = "") {
    echo $taxName;
    return $price * $taxRate;
}

calculateTax(4, 0.5, "City tax\n");
calculateTax(2, taxName: "State tax\n");
calculateTax(taxName: "Federal tax\n", price: 10, taxRate: 0.2);