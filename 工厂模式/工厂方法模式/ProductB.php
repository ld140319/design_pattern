<?php
require_once "./IProduct.php";

class ProductB implements IProduct
{
    public function Show()
    {
        echo "生产出了产品B".PHP_EOL;
    }
}