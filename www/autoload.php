<?php

function __autoload($class)
{
    if (file_exists(__DIR__ . '/controllers/' . $class . '.php')) {
        require __DIR__ . '/controllers/' . $class . '.php';
    } elseif (file_exists(__DIR__ . '/models/' . $class . '.php')) {
        require __DIR__ . '/models/' . $class . '.php';
    }
//    if (file_exists(__DIR__ . '/../views/news/' . $class . '.php')) {
//        include_once __DIR__ . '/../views/news/' . $class . '.php';
//    }
//    if (file_exists(__DIR__ . '/../models/' . $class . '.php')) {
//        include_once __DIR__ . '/../models/' . $class . '.php';
//    }
}