<?php

namespace Sitema;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //ignora as colunas do schema(migrate)
    //não precisa criar um controller para testar o banco: php artisan tinker
    public $timestamps = false;
}
