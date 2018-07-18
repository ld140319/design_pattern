<?php
require_once "./ContainerProduct.php";

//容器产品A类

class ContainerProductA extends ContainerProduct
{
    function Show()
    {
        echo "生产出了容器产品A".PHP_EOL;
    }
}