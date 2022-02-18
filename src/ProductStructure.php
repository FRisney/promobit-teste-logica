<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $n = [];
        foreach (self::products as $product) {
            $split = explode('-', $product);
            $cor = $split[0];
            $tam = $split[1];

            if (!isset($n[$cor]))
                $n[$cor] = [];

            if (!isset($n[$cor][$tam]))
                $n[$cor][$tam] = 0;

            $n[$cor][$tam]++;
        }
        return $n;
    }
}