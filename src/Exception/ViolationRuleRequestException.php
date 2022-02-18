<?php



namespace Amontreuil\ExceptionHandlerBundle\Exception;
use Throwable;

/**
 * Génération d'une exception lorsque le client tente d'executer une requête d'édition/suppression sur un paramètre immuable
 * (exemple : supprimer une donnée qui doit être présente en toute circonstance)
 */
class ViolationRuleRequestException extends ApiException
{
    public function __construct(
        array $missingVar,
        string $request,
        Throwable $previous = null
    ) {

        parent::__construct(
            'about:blank',
            "Violation of the rule",
            400,
            "The request cannot be executed for a violation of the rule. [ " . http_build_query($missingVar, '', ', ') . " ]",
            $request,
            $previous
        );
    }
}
