<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @contact  4213509@qq.com
 */

namespace HPlus\Contract\Exception;

class ChatException extends \Exception
{
    public function __construct($message, int $code = 400)
    {
        if (is_array($message)) {
            $message = json_encode($message);
        }
        $this->message = $message;
        $this->code = $code;
    }
}
