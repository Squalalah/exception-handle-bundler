<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionHandlerBundle\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

/**
 * Génération d'une exception lorsque la requête comporte des champs supplémentaires qui ne sont pas autorisés.
 */
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
            406,
            "Please remove those fields for the request to proceed.",
            $request,
            $previous
        );
    }
}
