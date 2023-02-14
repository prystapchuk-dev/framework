<?php

namespace System\Contracts;

interface IRouter
{
    public function addRouter(string $url, string $controllerName, string $controllerMethod = 'index') : void;
    public function resolvePatch(string $url) :array;
}