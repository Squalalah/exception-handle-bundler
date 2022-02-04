<?php

declare(strict_types=1);

namespace App\Factory;

use App\Exception\ApiException;
use App\Model\ProblemDetails;

class ApiExceptionFactory
{
    public static function create(ApiException $exception): ProblemDetails
    {
        return new ProblemDetails($exception);
    }
}
