<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionHandlerBundle\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

/**
 * Génération d'une exception lorsque le service est en maintenance ou en défaut.
 */
class UnavailableServiceException extends ApiException
{
    public function __construct(
        string $request,
        Throwable $previous = null
    ) {
        parent::__construct(
            'about:blank',
            "Service unavailable",
            503,
            "This service is currently unavailable, please try again later.",
            $request,
            $previous
        );
    }
}
