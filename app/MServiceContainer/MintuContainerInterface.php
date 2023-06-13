<?php

namespace App\MServiceContainer;

interface MintuContainerInterface
{
  public function __construct(string $transection_id,string $name);
    public function getNum():string;


}
