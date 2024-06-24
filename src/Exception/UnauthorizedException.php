<?php

namespace HPlus\Contract\Exception;

class UnauthorizedException extends \Exception
{
    private $authUrl = '';

    public function __construct(string $message = null, int $code = 400, $authUrl = null)
    {
        $this->authUrl = $authUrl;
        parent::__construct($message, $code);
    }

    /**
     * @return string
     */
    public function getAuthUrl(): string
    {
        return $this->authUrl;
    }

    /**
     * @param string $authUrl
     */
    public function setAuthUrl(string $authUrl)
    {
        $this->authUrl = $authUrl;
    }
}