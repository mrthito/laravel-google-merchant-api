<?php

namespace MrThito\GoogleMerchantApi\Contents\Order;

use MrThito\GoogleMerchantApi\Contents\BaseContent;

class OrderPaymentMethod extends BaseContent
{

    /**
     * Allowed attributes.
     *
     * @var string   type
     * @var string   lastFourDigits
     * @var string   lastFourDigits
     * @var integer  lastFourDigits
     * @var integer  expirationYear
     *
     * @var array
     */
    protected $allowed_attributes = [
        'type', 'lastFourDigits', 'predefinedBillingAddress',
        'expirationMonth', 'expirationYear',
    ];
}
