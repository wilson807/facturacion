<?php

namespace Gebrail\Facturacion\Facades;


use Illuminate\Support\Facades\Facade;

class Facturacion extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'facturacion';
    }
}

