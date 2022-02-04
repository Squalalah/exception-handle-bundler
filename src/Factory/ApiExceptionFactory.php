<?php

declare(strict_types=1);

namespace Amontreuil\exceptionhandlermodule\Factory;

use Amontreuil\exceptionhandlermodule\Exception\ApiException;
use Amontreuil\exceptionhandlermodule\Model\ProblemDetails;

class ApiExceptionFactory
{
    public static function create(ApiException $exception): ProblemDetails
    {
        return new ProblemDetails($exception);
    }
}
