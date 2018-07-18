<?php
require_once "./IFactory.php";
require_once "./ContainerProductB.php";
require_once "./MouldProductB.php";

//A厂 - 生产模具+容器产品

class FactoryB implements IFactory
{
    function ManufactureContainer()
    {
        return new ContainerProductB();
    }

    function ManufactureMould()
    {
        return new MouldProductB();
    }
}