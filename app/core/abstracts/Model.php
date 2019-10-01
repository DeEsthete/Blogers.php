<?php
namespace core\abstracts;
use core\interfaces\ModelInterface;
use core\Database;

abstract class Model implements ModelInterface
{
    public function db()
    {
        return new Database();
    }
}