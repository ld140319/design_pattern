<?php
require_once "./IFactory.php";
require_once "./ProductA.php";

class FactoryA implements IFactory
{
    function Manufacture()
    {
        return new  ProductA();
    }
}