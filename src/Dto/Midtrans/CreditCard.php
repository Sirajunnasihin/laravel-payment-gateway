<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class CreditCard extends Data
{
    public bool $secure;

    public ?string $channel = null;

    public ?string $bank = null;

    public ?Installment $installment = null;

    /** @var string[] */
    public ?array $whitelist_bins = null;

    public ?DynamicDescriptor $dynamic_descriptor = null;
}
