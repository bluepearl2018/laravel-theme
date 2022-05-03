<?php

namespace Eutranet\Theme\Models;

use Illuminate\Database\Eloquent\Model;

class Downloadable extends Model
{
    public static array $packages = [
        "Eutranet\'s Laravel Init" => "eutranet/laravel-init",
        "Eutranet\'s Laravel Theme" => "eutranet/laravel-themee",
        "Eutranet\'s Laravel Commons" => "eutranet/laravel-commons",
        "Eutranet\'s Laravel Setup" => "eutranet/laravel-setup",
        "Eutranet\'s Laravel My Space" => "eutranet/laravel-my-space",
        "Eutranet\'s Laravel Backend" => "eutranet/laravel-be",
        "Eutranet\'s Laravel Frontend" => "eutranet/laravel-frontend",
    ];
}
