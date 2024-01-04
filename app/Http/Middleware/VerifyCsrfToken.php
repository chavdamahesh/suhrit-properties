<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://suhrit-properties.test/admin/*',
        'http://suhrit-properties.test/*',
        '*/sanctum/csrf-cookie',
        '*/api/property/upload'
    ];
}
