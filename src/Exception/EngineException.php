<?php

namespace HPlus\Contract\Exception;

class EngineException extends \Exception
{
    private ?array $error = null;

    public function __construct(string $message = null, int $code = 400, $error = null)
    {
        parent::__construct($message, $code);
        $this->error = $error;
    }

    /**
     * @return array|null
     */
    public function getError(): ?array
    {
        return $this->error;
    }

    /**
     * @param array|null $error
     */
    public function setError(?array $error): void
    {
        $this->error = $error;
    }

}