<?php

function view($view)
{
    $view = rtrim($_SERVER['DOCUMENT_ROOT'] . '/views/', '/') . '/' . ltrim($view, '/');
    include_once $_SERVER['DOCUMENT_ROOT'] . '/views/layout.php';
}
