<?php

declare(strict_types=1);

namespace Amontreuil\exceptionhandlermodule\EventListener;

use Amontreuil\exceptionhandlermodule\Exception\ApiException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;


class ExceptionListener
{
    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();
        $response = null;

        if ($exception instanceof ApiException) {
            $response = new JsonResponse($exception->getData());
            $response->setStatusCode($exception->getCode());
            $response->headers->replace($exception::HEADERS);
        }
        else {
            $response = new JsonResponse();
        }
        $event->setResponse($response);
    }
}
