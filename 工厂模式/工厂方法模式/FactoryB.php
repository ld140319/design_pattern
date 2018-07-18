<?php
require_once "./IFactory.php";
require_once "./ProductB.php";

class FactoryB implements IFactory
{
    function Manufacture()
    {
        return new  ProductB();
    }
}