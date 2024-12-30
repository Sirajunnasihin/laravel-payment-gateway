<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class DynamicDescriptor extends Data
{
    public string $merchant_name;
    public string $city_name;
    public string $country_code;
}
