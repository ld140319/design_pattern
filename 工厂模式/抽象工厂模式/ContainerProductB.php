<?php
require_once "./ContainerProduct.php";

//容器产品B类

class ContainerProductB extends ContainerProduct
{
    function Show()
    {
        echo "生产出了容器产品B".PHP_EOL;
    }
}