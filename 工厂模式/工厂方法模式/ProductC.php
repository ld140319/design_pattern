<?php
require_once "./IProduct.php";

class ProductC implements IProduct
{
    public function Show()
    {
        echo "生产出了产品C".PHP_EOL;
    }
}