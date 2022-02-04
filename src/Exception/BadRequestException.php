<?php

declare(strict_types=1);

namespace Amontreuil\exceptionhandlermodule\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

class BadRequestException extends ApiException
{
    public function __construct(
        array $missingVar,
        string $request,
        Throwable $previous = null
    ) {
        $text = '';
        for ($i = 0; $i < count($missingVar); $i++) {
            if ($i + 1 != count($missingVar)) {
                $text .= $missingVar[$i] . ', ';
            } else {
                $text .= $missingVar[$i];
            }
        }
        parent::__construct(
            'about:blank',
            "The required data [ " . $text . " ] is missing or incorrect.",
            400,
            "Please verify that you sent those values in the right format.",
            $request,
            $previous
        );
    }
}
