<?php
require_once "./ProductA.php";
require_once "./ProductB.php";
require_once "./ProductC.php";

class Factory
{
    static function Manufacture($ProductName)
    {
        //工厂类里用switch语句控制生产哪种商品；
        //使用者只需要调用工厂类的静态方法就可以实现产品类的实例化。
        switch ($ProductName) {
            case "A":
                return new ProductA();

            case "B":
                return new ProductB();

            case "C":

                return new ProductC();

            default:
                return null;

        }
    }
}