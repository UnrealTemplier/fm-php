<?php

class CryptoConverter {
    public string $currencyCode;

    function __construct(string $currencyCode) {
        $this->currencyCode = $currencyCode;
    }

    public function convert(float $value) : float|bool {
        $code = $this->currencyCode;
        $api = "https://cex.io/api/ticker/$code/USD";
        $json = file_get_contents($api);
        if (!$json) 
            return false;

        $data = json_decode($json);
        $last = $data->last;
        return $last * $value;
    }
}
