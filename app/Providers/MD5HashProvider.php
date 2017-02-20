<?php

namespace App\Providers;

use Illuminate\Hashing\HashServiceProvider;

class MD5HashProvider extends HashServiceProvider
{
    public function boot()
    {
        \App::bind('hash', function () {
            return new \App\Services\MD5Hasher;
        });
    }
}
