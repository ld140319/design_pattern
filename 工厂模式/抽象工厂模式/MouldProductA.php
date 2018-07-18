<?php
require_once "./MouldProduct.php";

//模具产品A类

class MouldProductA extends MouldProduct
{
    function Show()
    {
        echo "生产出了模具产品A".PHP_EOL;
    }
}