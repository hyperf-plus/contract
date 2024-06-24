<?php

namespace HPlus\Contract\Exception;

class ApiException extends \Exception
{
    public function __construct($message = null, int $code = 400)
    {
        if (is_array($message)) {
            $message = json_encode($message, JSON_UNESCAPED_UNICODE);
        }
        $this->message = $message;
        $this->code = $code;
    }
}
