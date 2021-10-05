<?php

namespace App\Shared;
use Ramsey\Uuid\Uuid;

class UuidGenerator{

    public static function uuid4()
    {
         return Uuid::uuid4();
    }

}