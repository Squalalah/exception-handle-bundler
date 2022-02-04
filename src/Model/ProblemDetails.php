<?php

declare(strict_types=1);

namespace Amontreuil\ExceptionModel;

use Amontreuil\ExceptionBundle\ApiException;
use JsonSerializable;

class ProblemDetails implements JsonSerializable
{

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $detail;

    /**
     * @var string
     */
    private $instance;

    /**
     * @param ApiException $apiException
     */
    public function __construct(ApiException $apiException)
    {
        $this->type = $apiException->getType();
        $this->title = $apiException->getTitle();
        $this->code =  $apiException->getCode();
        $this->detail = $apiException->getDetail();
        $this->instance = $apiException->getInstance();
    }

    /**
     * @return array<string, int|string>
     */
    public function jsonSerialize(): array
    {
        $toJson = [
            "type" => $this->type,
            "title" => $this->title,
            "status" => $this->code,
            "detail" => $this->detail,
            "instance" => $this->instance,
        ];

        return $toJson;
    }
}
