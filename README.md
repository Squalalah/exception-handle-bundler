### Installation

1. lancer "composer amontreuil/exception-handler-bundle" dans le repo
2. enjoy chaque exception dans l'espace de nom Amontreuil/ExceptionHandlerBundle/


### Description des exceptions

- 400 : BadRequestException
  - The required data is missing or incorrect.


- 401 : UnauthorizedRequestException
  - Unauthorized access


- 403 : ForbiddenRequestException
  - Forbidden access


- 404 : NotFoundException
  - The given {variable} does not exists in our database.


- 405 : MethodNotAllowedException
  - When the request methods is forbidden by the application
  - i.e: GET request on POST/PATCH route.


- 415 : UnsupportedMediaTypeApiException
  - One of those :
    - Your request doesn't contain a Content-Type
    - The content-type {contentType} is not allowed in our api calls.


- 452 : BadFormPostException
  - Wrong form format has been sent.
  
  
- 453 : BadUuidException
  - The given {uuid} seems to be invalid.


- 454 : DuplicateDataException
  - Data duplication attempt


- 455 : ExtraFieldsException
  - The fields {variable} are not allowed.
  - Multiple variables can be displayed in the message.


- 456 : ViolationRuleRequestException
  - Violation of the rule
  
  
- 503 : UnavailableServiceException
  - Service unavailable


