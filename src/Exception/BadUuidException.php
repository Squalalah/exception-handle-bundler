<?php

declare(strict_types=1);

namespace Amontreuil\exceptionhandlermodule\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

/**
 * Génération d'une exception lorsque le format d'uuid envoyé par le client est incorrect.
 */
class BadUuidException extends ApiException
{
    public function __construct(
        string $missingVar,
        string $request,
        Throwable $previous = null
    ) {
        parent::__construct(
            'about:blank',
            "The given '" . $missingVar . "' seems to be invalid.",
            400,
            "Please verify that you sent a valid '" . $missingVar . "'.",
            $request,
            $previous
        );
    }
}
