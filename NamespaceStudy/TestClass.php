<?php

namespace PHP\Study\NamespaceStudy;

class TestClass
{
    var $b;

    function test($param)
    {
        $this->b = $param;
        echo "参数的值为{$param}";
    }
}

//$a = new testClass();
//$a->test("x");