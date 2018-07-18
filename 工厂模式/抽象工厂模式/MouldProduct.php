<?php
require_once "./IProduct.php";

//抽象产品类 ，定义具体产品的公共接口
//模具产品抽象类

abstract  class MouldProduct implements IProduct
{
    abstract function Show();
}