<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionBundle;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

class NotFoundException extends ApiException
{
    public function __construct(
        string $missingVar,
        string $request,
        Throwable $previous = null
    ) {
        parent::__construct(
            'about:blank',
            "The given '" . $missingVar . "' does not exists in our database.",
            404,
            'Please verify that you sent the right value.',
            $request,
            $previous
        );
    }
}
