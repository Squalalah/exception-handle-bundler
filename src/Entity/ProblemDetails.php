<?php

namespace Amontreuil\exceptionhandlermodule\Entity;

use JsonSerializable;

class ProblemDetails implements JsonSerializable
{
    private $type;
    private $title;
    private $status;
    private $detail;
    private $instance;

    /**
     * @param $type
     * @param $title
     * @param $status
     * @param $detail
     * @param $instance
     */
    public function __construct($type, $title, $status, $detail, $instance)
    {
        $this->type = $type;
        $this->title = $title;
        $this->status = $status;
        $this->detail = $detail;
        $this->instance = $instance;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): self
    {
        $this->detail = $detail;

        return $this;
    }

    public function getInstance(): ?string
    {
        return $this->instance;
    }

    public function setInstance(string $instance): self
    {
        $this->instance = $instance;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return array(
            'type' => $this->type,
            'status' => $this->status,
            'detail' => $this->detail,
            'instance' => $this->instance
        );
    }
}
