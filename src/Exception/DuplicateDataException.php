<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionBundle;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

class DuplicateDataException extends ApiException
{
    public function __construct(
        string $request,
        Throwable $previous = null
    ) {
        parent::__construct(
            'about:blank',
            "Data duplication",
            403,
            "The data you try to insert already exists in our database and we do not allow duplicates.",
            $request,
            $previous
        );
    }
}
