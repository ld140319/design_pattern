<?php
//https://www.jianshu.com/p/7deb64f902db

require_once "./FactoryA.php";
require_once "./FactoryB.php";

$mFactoryA = new FactoryA();
$mFactoryB = new FactoryB();
//A厂当地客户需要容器产品A
$mFactoryA->ManufactureContainer()->Show();
//A厂当地客户需要模具产品A
$mFactoryA->ManufactureMould()->Show();

//B厂当地客户需要容器产品B
$mFactoryB->ManufactureContainer()->Show();
//B厂当地客户需要模具产品B
$mFactoryB->ManufactureMould()->Show();
