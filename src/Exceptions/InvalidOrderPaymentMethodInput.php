<?php

namespace MrThito\GoogleMerchantApi\Exceptions;

class InvalidOrderPaymentMethodInput extends \Exception
{
    protected $message = 'MrThito\GoogleMerchantApi: The order payment method type is invalid.';
}