<?php

namespace MOONSN1994\Uic\Facades;

use Illuminate\Support\Facades\Facade;

class Uic extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     **/
    protected static function getFacadeAccessor()
    {
        return 'uic';
    }
}
