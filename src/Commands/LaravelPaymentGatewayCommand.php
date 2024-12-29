<?php

namespace Akm\LaravelPaymentGateway\Commands;

use Illuminate\Console\Command;

class LaravelPaymentGatewayCommand extends Command
{
    public $signature = 'laravel-payment-gateway';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
