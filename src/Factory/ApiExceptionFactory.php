<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionFactory;

use Amontreuil\ExceptionBundle\ApiException;
use Amontreuil\ExceptionModel\ProblemDetails;

class ApiExceptionFactory
{
    public static function create(ApiException $exception): ProblemDetails
    {
        return new ProblemDetails($exception);
    }
}
