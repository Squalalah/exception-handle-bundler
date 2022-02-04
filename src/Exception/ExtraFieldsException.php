<?php

declare(strict_types=1);

namespace Amontreuil\exceptionhandlermodule\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

class ExtraFieldsException extends ApiException
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
            "The fields [ " . $text . " ] are not allowed.",
            400,
            "Please remove those fields for the request to proceed.",
            $request,
            $previous
        );
    }
}
