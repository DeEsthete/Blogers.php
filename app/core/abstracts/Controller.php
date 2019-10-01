<?php
namespace core\abstracts;
use Core\Config;
use core\interfaces\ControllerInterface;
use core\RenderEngine;

abstract class Controller implements ControllerInterface
{
    public function render($templateName, $variables = [])
    {
        $engine = RenderEngine::get();
        if ($variables){
            foreach ($variables as $key => $value){
                $engine->assign($key, $value);
            }
        }
        return $engine->display($templateName . Config::main("templateExtension"));
    }
}