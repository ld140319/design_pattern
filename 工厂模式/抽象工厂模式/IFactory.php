<?php
//抽象工厂类，定义具体工厂的公共接口

interface IFactory
{
    function  ManufactureContainer();
    function  ManufactureMould();
}