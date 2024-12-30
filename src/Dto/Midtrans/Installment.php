<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class Installment extends Data
{
    public bool $required;
    public Terms $terms;
}
