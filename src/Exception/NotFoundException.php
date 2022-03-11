<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionHandlerBundle\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

/**
 * Génération d'une exception lorsque le champ passé en argument n'existe pas en base de donnée.
 */
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
            408,
            'Please verify that you sent the right value.',
            $request,
            $previous
        );
    }
}
