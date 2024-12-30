<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class FreeText extends Data
{
    /** @var \Akm\Midtrans\Dto\Inquiry[] */
    public array $inquiry;

    /** @var \Akm\Midtrans\Dto\Payment[] */
    public array $payment;
}
