<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionHandlerBundle\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

/**
 * Génération d'une exception lorsque une donnée déjà existante en base de donnée essaye d'être insérée.
 */
class DuplicateDataException extends ApiException
{
    public function __construct(
        string $request,
        Throwable $previous = null
    ) {
        parent::__construct(
            'about:blank',
            "Data duplication",
            405,
            "The data you try to insert already exists in our database and we do not allow duplicates.",
            $request,
            $previous
        );
    }
}
