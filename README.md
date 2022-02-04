# Récupérer les exception


## 1 - Copier les dossiers EventListener/Exception/Factory/Model

## 2 - Coller dans votre dossier /SRC

## 3 - Ajouter ceci à la fin de votre fichier config/services.yaml


```abc
App\EventListener\ExceptionListener:
        tags:
            - { name: kernel.event_listener, event: kernel.exception, method: onKernelException }
```
