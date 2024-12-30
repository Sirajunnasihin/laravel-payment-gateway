<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class TransactionDetails extends Data
{
    public string $order_id;
    public int $gross_amount;
}
