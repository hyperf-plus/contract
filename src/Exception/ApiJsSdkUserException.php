<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @contact  4213509@qq.com
 */

namespace HPlus\Contract\Exception;

class ApiJsSdkUserException extends \Exception
{
    private string $login_url;

    private string $client_id;

    public function __construct(string $message, int $code, string $login_url, string $appId)
    {
        if (is_array($message)) {
            $message = json_encode($message);
        }
        $this->message = $message;
        $this->code = $code;
        $this->login_url = $login_url;
        $this->client_id = $appId;
    }

    public function getClientId(): string
    {
        return $this->client_id;
    }

    public function setClientId(string $client_id): void
    {
        $this->client_id = $client_id;
    }

    public function getLoginUrl(): string
    {
        return $this->login_url;
    }

    public function setLoginUrl(string $login_url): void
    {
        $this->login_url = $login_url;
    }
}
