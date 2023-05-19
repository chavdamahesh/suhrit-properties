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
        'https://dev.atladra-properties.com/admin/*',
        'https://dev.atladra-properties.com/*',
        '*/sanctum/csrf-cookie',
        '*/api/property/upload'
    ];
}
