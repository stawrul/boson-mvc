<?php

const REDIRECT_PREFIX = 'redirect:';

function dispatch($routing, $url)
{
    $controller = $routing[$url];

    $model = [];
    $view = $controller($model);

    build_response($view, $model);
}

function build_response($view, $model)
{
    if (strpos($view, REDIRECT_PREFIX) === 0) {
        $url = str_replace(REDIRECT_PREFIX, '', $view);
        header("Location: " . $url);
        die();

    } else {
        render($view, $model);
    }
}

function render($view_name, $model)
{
    extract($model);
    require 'views/' . $view_name;
}
