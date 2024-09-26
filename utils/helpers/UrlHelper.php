<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/utils/config.php';

function asset($url)
{
    $appUrl = config()['app']['url'];
    $publicPath = '/public';
    return rtrim($appUrl, '/') . '/' . ltrim($publicPath, '/') . '/' .  ltrim($url, '/');
}

function url($url)
{
    $appUrl = config()['app']['url'];
    return rtrim($appUrl, '/') . '/' .  ltrim($url, '/');
}
