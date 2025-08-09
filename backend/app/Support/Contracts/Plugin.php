<?php

namespace App\Support\Contracts;

interface Plugin
{
    public function register(): void;
    public function boot(): void;
}
