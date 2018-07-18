<?php
//https://blog.csdn.net/carson_ho/article/details/52343584

require_once "./FactoryA.php";
require_once "./FactoryB.php";
require_once "./FactoryC.php";

//客户要产品A
$mFactoryA = new FactoryA();
$mFactoryA->Manufacture()->Show();

//客户要产品B
$mFactoryB = new FactoryB();
$mFactoryB->Manufacture()->Show();

//客户要产品C
$mFactoryC = new FactoryC();
$mFactoryC->Manufacture()->Show();