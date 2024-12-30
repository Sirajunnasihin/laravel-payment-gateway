<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class TransactionDto extends Data
{
    #[DataCollectionOf(TransactionDetails::class)]
    public DataCollection $transaction_details;

    /** @var \Akm\Midtrans\Dto\ItemDetails[] */
    public ?array $item_details = null;

    #[DataCollectionOf(CustomerDetails::class)]
    public ?DataCollection $customer_details = null;

    /** @var string[] */
    public ?array $enabled_payments = null;

    #[DataCollectionOf(CreditCard::class)]
    public ?DataCollection $credit_card = null;
    
    #[DataCollectionOf(BcaVa::class)]
    public ?DataCollection $bca_va = null;
    
    #[DataCollectionOf(BniVa::class)]
    public ?DataCollection $bni_va = null;
    
    #[DataCollectionOf(BriVa::class)]
    public ?DataCollection $bri_va = null;
    
    #[DataCollectionOf(PermataVa::class)]
    public ?DataCollection $permata_va = null;
    
    #[DataCollectionOf(Shopeepay::class)]
    public ?DataCollection $shopeepay = null;
    
    #[DataCollectionOf(Gopay::class)]
    public ?DataCollection $gopay = null;
    
    #[DataCollectionOf(Callbacks::class)]
    public ?DataCollection $callbacks = null;
    
    #[DataCollectionOf(Expiry::class)]
    public ?DataCollection $expiry = null;
    
    public ?string $custom_field1 = null;
    public ?string $custom_field2 = null;
    public ?string $custom_field3 = null;
}
