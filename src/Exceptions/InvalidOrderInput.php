<?php

namespace MrThito\GoogleMerchantApi\Exceptions;

class InvalidOrderInput extends \Exception
{
    protected $message = 'MrThito\GoogleMerchantApi: The order content type is invalid.';
}