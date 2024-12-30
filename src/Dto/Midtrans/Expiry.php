<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class Expiry extends Data
{
    public string $start_time;
    /** minute | day | hour */
    public string $unit;
    public int $duration;
}
