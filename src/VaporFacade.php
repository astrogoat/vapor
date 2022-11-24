<?php

namespace Astrogoat\Vapor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Vapor\Vapor
 */
class VaporFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vapor';
    }
}
