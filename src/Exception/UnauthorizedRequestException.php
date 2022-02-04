<?php

declare(strict_types=1);

namespace App\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

class UnauthorizedRequestException extends ApiException
{
    public function __construct(
        string $request,
        Throwable $previous = null
    ) {
        parent::__construct(
            'about:blank',
            "Unauthorized access" ,
            401,
            "Please login with your credentials to perform this request.",
            $request,
            $previous
        );
    }
}