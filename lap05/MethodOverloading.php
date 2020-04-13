<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Method Overloading</title>
    </head>
    <body>
        <?php
            class MethodTest{
                public function __call($name, $arguments)
                {
                    echo "calling object method '$name'" . implode(',', $arguments). "<br>";
                }

                public static function __callStatic($name, $arguments)
                {
                    echo "Calling static method '$name'" . implode(',', $arguments). "<br>";
                }
            }
            $obj = new MethodTest;
            $obj->runTest('in object context');

            MethodTest::runTest('In static context');
        ?>
    </body>
</html>
