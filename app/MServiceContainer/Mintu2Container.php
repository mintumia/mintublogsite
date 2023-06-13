<?php

namespace App\MServiceContainer;

class Mintu2Container implements MintuContainerInterface
{

    private $transection_id;
    private $name;

    public function __construct(string $transection_id,string $name)
    {


        $this->transection_id = $transection_id;
        $this->name = $name;
    }
    public function getNum(): string
    {
        return $this->transection_id." Name from Mintu02 is : ".$this->name;
    }
}
