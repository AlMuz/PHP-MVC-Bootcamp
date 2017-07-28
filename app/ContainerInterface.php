<?php
namespace Myproject;
interface ContainerInterface
{
    public function get(string $dependencyName);
}