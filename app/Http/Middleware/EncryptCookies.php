<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     * 不加密的cookies的名称。
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
