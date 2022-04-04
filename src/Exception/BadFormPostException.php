<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionHandlerBundle\Exception;
use Throwable;

/**
 * Génération d'une exception lorsque le mauvais format de formulaire a été envoyé par le client.
 */
class BadFormPostException extends ApiException
{
    public function __construct(
        string $request,
        Throwable $previous = null
    ) {
        parent::__construct(
            'about:blank',
            "Wrong form format has been sent",
            452,
            "Please verify that you sent your form with a x-www-form-urlencoded format.",
            $request,
            $previous
        );
    }
}

