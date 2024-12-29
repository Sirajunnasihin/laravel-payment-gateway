<?php

namespace Akm\LaravelPaymentGateway\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Akm\LaravelPaymentGateway\LaravelPaymentGateway
 */
class LaravelPaymentGateway extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Akm\LaravelPaymentGateway\LaravelPaymentGateway::class;
    }
}
