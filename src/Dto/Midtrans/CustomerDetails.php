<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class CustomerDetails extends Data
{
    public ?string $first_name = null;

    public ?string $last_name = null;

    public ?string $email = null;

    public ?string $phone = null;

    public ?BillingAddress $billing_address = null;

    public ?ShippingAddress $shipping_address = null;
}
