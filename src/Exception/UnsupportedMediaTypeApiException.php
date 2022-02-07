<?php

declare(strict_types=1);

namespace Amontreuil\exceptionhandlermodule\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

/**
 * Génération d'une exception lorsque le Content-Type de la requête ne convient pas aux exigences de l'API.
 */
class UnsupportedMediaTypeApiException extends ApiException
{
    public function __construct(?string $contentType, string $request, Throwable $previous = null)
    {
        $text = '';
        if ($contentType === null) {
            $text = "Your request doesn't contain a Content-Type";
        } else {
            $text = "The content-type '" . $contentType . "' is not allowed in our api calls.";
        }
        parent::__construct(
            'about:blank',
            $text,
            405,
            "Please check the openApi specifications to use the right Content-Type.",
            $request,
            $previous
        );
    }
}
