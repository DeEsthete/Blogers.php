<?php
namespace core\abstracts;
use Core\Config;
use core\interfaces\ControllerInterface;
use core\RenderEngine;

abstract class Controller implements ControllerInterface
{
    protected $layout;

    public function render($templateName, $variables = [])
    {
        if ($this->layout !== null){
            $variables["template"] = $templateName . Config::main("templateExtension");
            $templateName = "layout/" . $this->layout;
        }

        $engine = RenderEngine::get();
        if ($variables){
            foreach ($variables as $key => $value){
                $engine->assign($key, $value);
            }
        }
        return $engine->display($templateName . Config::main("templateExtension"));
    }
}