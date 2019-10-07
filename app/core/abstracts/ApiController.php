<?php
namespace core\abstracts;

use core\interfaces\ApiControllerInterface;
use models\Flashes;

abstract class ApiController implements ApiControllerInterface
{
    const CODE_START = 5000;

    public function render($data, $code)
    {
        return json_encode([
            "code" => $code + self::CODE_START,
            "data" => $data,
            "messages" => Flashes::get()
        ]);
    }
}