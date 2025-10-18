<?php

namespace MrThito\GoogleMerchantApi\Exceptions;

class InvalidProductShippingInput extends \Exception
{
    protected $message = 'MrThito\GoogleMerchantApi: The product shipping content type is invalid.';
}