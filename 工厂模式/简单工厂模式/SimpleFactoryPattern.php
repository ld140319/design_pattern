<?php
//https://www.jianshu.com/p/e55fbddc071c

require_once "./Factory.php";

$mFactory = new Factory();

//调用工厂类的静态方法 & 传入不同参数从而创建产品实例

//客户要产品A
try {
    $mFactory->Manufacture("A")->Show();
} catch (Exception $e) {
    print("没有这一类产品".PHP_EOL);
}

//客户要产品B
try {
    $mFactory->Manufacture("B")->Show();
} catch (Exception $e) {
    print("没有这一类产品".PHP_EOL);
}

//客户要产品C
try {
    $mFactory->Manufacture("C")->Show();
} catch (Exception $e) {
    print("没有这一类产品".PHP_EOL);
}

//客户要产品D
try {
    $mFactory->Manufacture("D")->Show();
} catch (Exception $e) {
    print("没有这一类产品".PHP_EOL);
}
