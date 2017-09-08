<?php

namespace GustavTrenwith\Guid;

use Illuminate\Support\Facades\Facade;

/**
 * Class GuidFacade
 * @package gustavtrenwith\guid
 * @author Gustav Trenwith <gtrenwith@gmail.com>
 */
class GuidFacade extends Facade
{
    /**
     * Name of the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Guid';
    }
}
