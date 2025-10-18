<?php

namespace MrThito\GoogleMerchantApi\Contents;

use Closure;

class Measure extends BaseContent
{

    /**
     * Allowed attributes.
     *
     * @var string      unit
     * @var double|long value
     *
     * @var array
     */
    protected $allowed_attributes = [
        'unit', 'value',
    ];

}
