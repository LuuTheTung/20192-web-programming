<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Constructor & Destructor</title>
    </head>
    <body>
        <?php
        class BaseClass{
            protected $name = "BaseClass";
            function __construct(){
                print("In " .$this->name. " constructor<br>");
            }
            function __destruct(){
                print("Destroying " .$this->name. "<br>");
            }
        }
        class SubClass extends BaseClass {
            function __construct(){
                $this->name = "SubClass";
                parent::__construct();
            }
            function __destruct(){
                parent::__destruct();
            }
        }
        $obj1 = new SubClass();
        $obj2 = new BaseClass();
        ?>
    </body>
</html>
