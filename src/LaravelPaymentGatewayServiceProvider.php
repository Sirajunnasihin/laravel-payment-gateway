<?php

namespace Akm\LaravelPaymentGateway;

use Akm\LaravelPaymentGateway\Commands\LaravelPaymentGatewayCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPaymentGatewayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-payment-gateway')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_payment_gateway_table')
            ->hasCommand(LaravelPaymentGatewayCommand::class);
    }
}
