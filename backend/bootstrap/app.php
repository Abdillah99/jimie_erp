<?php

require __DIR__ . '/../vendor/autoload.php';

function env(string $key, ?string $default = null): ?string
{
    return $_ENV[$key] ?? $default;
}
