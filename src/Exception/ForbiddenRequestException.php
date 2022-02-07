<?php

declare(strict_types=1);

namespace Amontreuil\exceptionhandlermodule\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

/**
 * Génération d'une exception lorsque le client n'a pas les droits suffisants pour effectuer la requête.
 */
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
