<?php

namespace App\MServiceContainer;

class Mintu2Container //implements MintuContainerInterface
{

public $name = "Hello from Container 02: ";

    public function getNum():string
    {

        return $this->name;
    }
}
