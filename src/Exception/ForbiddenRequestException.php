<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionBundle;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

class ForbiddenRequestException extends ApiException
{
    public function __construct(
        string $request,
        Throwable $previous = null
    ) {
        parent::__construct(
            'about:blank',
            "Forbidden access",
            403,
            "You don't have the rights to perform this request, please contact your administrator.",
            $request,
            $previous
        );
    }
}
