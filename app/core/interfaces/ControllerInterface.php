<?php
namespace core\interfaces;


interface ControllerInterface
{
    public function render($templateName, $variables = []);
}