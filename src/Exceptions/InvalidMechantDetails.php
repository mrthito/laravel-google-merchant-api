<?php

namespace MrThito\GoogleMerchantApi\Exceptions;

class InvalidMechantDetails extends \Exception
{
    protected $message = 'MrThito\GoogleMerchantApi: Could not determine merchant credentials.';
}
