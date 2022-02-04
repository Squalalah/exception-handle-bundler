<?php

declare(strict_types=1);

namespace App\Exception;

use Exception;
use Throwable;

class ApiException extends Exception
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
     * @var string
     */
    private $detail;

    /**
     * @var string
     */
    private $instance;

    public const HEADERS = ["Content-Type" => "application/problem+json", "Content-Language" => "en"];

    public function __construct(
        string $type = "about:blank",
        string $title,
        int $code = 0,
        string $detail,
        string $instance,
        Throwable $previous = null
    ) {
        $this->type = $type;
        $this->title = $title;
        $this->detail = $detail;
        $this->instance = $instance;
        parent::__construct("", $code, $previous);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDetail(): string
    {
        return $this->detail;
    }

    /**
     * @return string
     */
    public function getInstance(): string
    {
        return $this->instance;
    }

}
