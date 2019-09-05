<?php namespace Scottybo\LaravelFacebookSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Scottybo\LaravelFacebookSdk\LaravelFacebookSdk
 */
class FacebookFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * Don't use this. Just... don't.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Scottybo\LaravelFacebookSdk\LaravelFacebookSdk';
    }
}
