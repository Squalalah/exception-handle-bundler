<?php

declare(strict_types=1);

namespace App\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

class BadFormPostException extends ApiException
{
    public function __construct(
        string $request,
        Throwable $previous = null
    ) {
        parent::__construct(
            'about:blank',
            "Wrong form format has been sent",
            400,
            "Please verify that you sent your form with a x-www-form-urlencoded format.",
            $request,
            $previous
        );
    }
}

