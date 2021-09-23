<?php

namespace RafaHernandez\RfcValidator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RafaHernandez\RfcValidator\RfcValidator
 */
class RfcValidatorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rfc-validator';
    }
}
