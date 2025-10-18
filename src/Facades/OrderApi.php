<?php

namespace MrThito\GoogleMerchantApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MrThito\GoogleMerchantApi\Classes\ProductsApi
 */
class OrderApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'orderApi';
    }
}
