<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionHandlerBundle\Exception;

use Amontreuil\ExceptionHandlerBundle\Exception\ApiException;
use Symfony\Component\HttpFoundation\Request;
use Throwable;

/**
 * Génération d'une exception lorsque des champs sont absents ou incorrects.
 */
class BadRequestException extends ApiException
{
    public function __construct(
        array $missingVar,
        string $request,
        Throwable $previous = null
    ) {
        foreach($missingVar as $value) {
            if($value === null) $value = 'MISSING';
        }
        parent::__construct(
            'about:blank',
            "The required data is missing or incorrect.",
            400,
            "Please verify that you sent those values in the right format. [ " . http_build_query($missingVar, '', ', ') . " ]",
            $request,
            $previous
        );
    }
}
