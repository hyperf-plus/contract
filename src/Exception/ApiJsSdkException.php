<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @contact  4213509@qq.com
 */

namespace HPlus\Contract\Exception;

class ApiJsSdkException extends \Exception
{
    private string $jump_url;

    public function __construct($message = '', int $code = 400, $jump_url = '')
    {
        if (is_array($message)) {
            $message = json_encode($message);
        }
        $this->message = $message;
        $this->code = $code;
        $this->jump_url = $jump_url;
    }

    public function getJumpUrl(): string
    {
        return $this->jump_url;
    }

    public function setJumpUrl(string $jump_url): void
    {
        $this->jump_url = $jump_url;
    }
}
