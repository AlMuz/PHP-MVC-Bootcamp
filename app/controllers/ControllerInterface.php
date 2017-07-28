<?php
namespace Myproject\controllers;
interface ControllerInterface
{
    public function render(string $template, array $content = []) : string;


}