<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class Terms extends Data
{
    /** @var int[] */
    public ?array $bni;

    /** @var int[] */
    public ?array $mandiri;

    /** @var int[] */
    public ?array $cimb;

    /** @var int[] */
    public ?array $bca;

    /** @var int[] */
    public ?array $offline;
}
