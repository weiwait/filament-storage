<?php

namespace Weiwait\FilamentStorage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Weiwait\FilamentStorage\FilamentStorage
 */
class FilamentStorage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Weiwait\FilamentStorage\FilamentStorage::class;
    }
}
