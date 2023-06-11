<?php

namespace App\MServiceContainer;

use mysql_xdevapi\Collection;

class MintuContainer implements MintuContainerInterface
{
    public $num = 0;

    /*public function __construct($num)
    {
        $this->num = $num;

    }*/

    public function pay(): array
    {
       $mm = [];
        for ($a = 0; $a < 10; $a++) {

            $mm[$a] = "Hello from MintuContainer : {$a}";


        }

        return $mm ;
    }

    public function test():string
    {
        return "Hello from Test";

    }

    public function getNum():int
    {

        return 20;

    }

}
