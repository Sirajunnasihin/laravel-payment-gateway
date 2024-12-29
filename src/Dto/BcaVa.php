<?php

namespace Akm\LaravelPaymentGateway\Dto;

use Spatie\LaravelData\Data;

class BcaVa extends Data
{
    public string $va_number;
    public string $sub_company_code;
    public FreeText $free_text;
}
