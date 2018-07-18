<?php
require_once "./IFactory.php";
require_once "./ProductC.php";

class FactoryC implements IFactory
{
    function Manufacture()
    {
        return new  ProductC();
    }
}