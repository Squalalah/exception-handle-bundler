### Installation

1. lancer "composer amontreuil/exception-handler-bundle" dans le repo
2. ajouter ces lignes de code en bas de votre fichier config/services.yaml

```mermaid
Amontreuil\exceptionhandlermodule\EventListener\ExceptionListener:
        tags:
            - { name: kernel.event_listener, event: kernel.exception, method: onKernelException }
```

Enjoy !
