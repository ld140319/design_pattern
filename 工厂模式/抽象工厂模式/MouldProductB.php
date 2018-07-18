<?php
require_once "./MouldProduct.php";

//模具产品B类

class MouldProductB extends MouldProduct
{
    function Show()
    {
        echo "生产出了模具产品B".PHP_EOL;
    }
}