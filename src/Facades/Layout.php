<?php

namespace Mintreu\Layout\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mintreu\Layout\Layout
 */
class Layout extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mintreu\Layout\Layout::class;
    }
}
