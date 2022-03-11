### Installation

1. lancer "composer amontreuil/exception-handler-bundle" dans le repo
2. enjoy chaque exception dans l'espace de nom Amontreuil/ExceptionHandlerBundle/


### Description des exceptions

- 401 : BadFormPostException
  - Wrong form format has been sent.
  

- 402 : BadRequestException
  - The required data is missing or incorrect.


- 403 : BadUuidException
  - The given {uuid} seems to be invalid.


- 405 : DuplicateDataException
  - Data duplication attempt


- 406 : ExtraFieldsException
  - The fields {variable} are not allowed.
  - Multiple variables can be displayed in the message.


- 407 : ForbiddenRequestException
  - Forbidden access


- 408 : NotFoundException
  - The given {variable} does not exists in our database.


- 409 : UnauthorizedRequestException
  - Unauthorized access


- 410 : UnsupportedMediaTypeApiException
  - One of those :
    - Your request doesn't contain a Content-Type
    - The content-type {contentType} is not allowed in our api calls.


- 411 : ViolationRuleRequestException
  - Violation of the rule


- 503 : UnavailableServiceException
  - Service unavailable


