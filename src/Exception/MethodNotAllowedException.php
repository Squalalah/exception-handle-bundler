<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionHandlerBundle\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

/**
 * Génération d'une exception lorsque le champ passé en argument n'existe pas en base de donnée.
 */
class MethodNotAllowedException extends ApiException
{
    public function __construct(
        string $request,
        Throwable $previous = null
    ) {
        parent::__construct(
            'about:blank',
            "This request method is not allowed on this route.",
            405,
            'Please use an authorized method for your request.',
            $request,
            $previous
        );
    }
}
