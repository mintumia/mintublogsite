<?php

namespace App\MServiceContainer;

use mysql_xdevapi\Collection;

class MintuContainer implements MintuContainerInterface
{


    private $transection_id;

    public function __construct(string $transection_id)
    {


        $this->transection_id = $transection_id;
    }
    public function getNum(): string
    {
       return $this->transection_id;
    }


}
