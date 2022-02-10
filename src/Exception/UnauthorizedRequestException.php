<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionHandlerBundle\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

/**
 * Génération d'une exception lorsque le client n'est pas connecté à un service le demandant.
 */
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
