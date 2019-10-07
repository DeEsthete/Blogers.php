<?php
/**
 * Created by PhpStorm.
 * User: ПавловЕ
 * Date: 07.10.2019
 * Time: 21:08
 */

namespace core\interfaces;


interface ApiControllerInterface
{
    public function render($data, $code);
}