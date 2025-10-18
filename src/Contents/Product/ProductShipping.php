<?php

namespace MrThito\GoogleMerchantApi\Contents\Product;

use MrThito\GoogleMerchantApi\Contents\BaseContent;
use MrThito\GoogleMerchantApi\Contents\Price;

class ProductShipping extends BaseContent
{

    /**
     * Allowed attributes.
     *
     * @var array
     */
    protected $allowed_attributes = [
        'country', 'locationGroupName', 'locationId', 'postalCode',
        'price', 'region', 'service',
    ];

    /**
     * Set the shipping price.
     *
     * @param  Closure|string|float|array $price
     * @param  string|null $currency
     * @return $this
     */
    public function price($price, $currency = null)
    {
        if(is_numeric($price) || is_string($price)){
            if(is_null($currency)){
                $currency = config('laravel-google-merchant-api.default_currency', 'AUD');
            }
            $price = (new Price)->value($price)->currency($currency);
        }elseif(is_array($price)){
            $price = (new Price)->with($price);
        }elseif (is_callable($price)) {
            $callback = $price;
            $callback($price = new Price);
        }elseif(!($price instanceof Price)){
            throw new \MrThito\GoogleMerchantApi\Exceptions\InvalidPriceInput;
        }

        $this->attributes[ 'price' ] = $price->get();

        return $this;
    }

}
