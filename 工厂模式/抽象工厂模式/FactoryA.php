<?php
require_once "./IFactory.php";
require_once "./ContainerProductA.php";
require_once "./MouldProductA.php";

//A厂 - 生产模具+容器产品

class FactoryA implements IFactory
{
    function ManufactureContainer()
    {
        return new ContainerProductA();
    }

    function ManufactureMould()
    {
        return new MouldProductA();
    }
}