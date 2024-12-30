<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class ItemDetails extends Data
{
    public ?string $id = null;
    public ?int $price = null;
    public ?int $quantity = null;
    public ?string $name = null;
    public ?string $brand = null;
    public ?string $category = null;
    public ?string $merchant_name = null;
}
