<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class ShippingAddress extends Data
{
    public ?string $first_name = null;

    public ?string $last_name = null;

    public ?string $email = null;

    public ?string $phone = null;

    public ?string $address = null;

    public ?string $city = null;

    public ?string $postal_code = null;

    public ?string $country_code = null;
}
