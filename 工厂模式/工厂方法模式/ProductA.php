<?php
require_once "./IProduct.php";

class ProductA implements IProduct
{
    public function Show()
    {
        echo "生产出了产品A".PHP_EOL;
    }
}