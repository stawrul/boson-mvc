<?php

function index(&$model)
{
    $model['greeting'] = 'world';

    return 'index.php';
}

function about()
{
    return 'about.php';
}

function redirection_test()
{
    return 'redirect:about';
}

