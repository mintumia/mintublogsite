<?php

namespace App\MServiceContainer;

use mysql_xdevapi\Collection;

class MintuContainer implements MintuContainerInterface
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
       return $this->transection_id." Name is : ".$this->name;
    }


}
