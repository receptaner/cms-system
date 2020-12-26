<?php

function controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/app/controller/' . strtolower($controllerName) . '.php';
}

function view($viewName) {
    return PATH . '/app/view/' . $viewName . '.php';
}