<?php

declare(strict_types=1);

namespace Amontreuil\exceptionhandlermodule\EventListener;

use Amontreuil\exceptionhandlermodule\Exception\ApiException;
use Amontreuil\exceptionhandlermodule\Factory\ApiExceptionFactory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;


class ExceptionListener
{
    public function onKernelException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();
        $response = new Response();

        if ($exception instanceof ApiException) {
            $response->setStatusCode($exception->getCode());
            $response->headers->replace($exception::HEADERS);
            $response->setContent((string)json_encode(ApiExceptionFactory::create($exception)));
        }
        var_dump($exception->getMessage());

        $event->setResponse($response);
    }
}
