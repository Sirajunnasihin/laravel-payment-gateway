<?php

// config for Akm/LaravelPaymentGateway
return [
    'gateway' => [
        'midtrans' => [
            'merchant_id' => env('MIDTRANS_MERCHANT_ID', ''),
            'client_key' => env('MIDTRANS_CLIENT_KEY', ''),
            'server_key' => env('MIDTRANS_SERVER_KEY', ''),
            'is_3ds' => env('MIDTRANS_3DS', false),
        ],
    ],
];
