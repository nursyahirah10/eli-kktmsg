<?php

if (! function_exists('is_equal_url'))
{
    function is_equal_url($route)
    {
        if (is_string($route)) {
            $route = [$route];
        }
        
        return route(...$route) == \Request::url();
    }
}

if (! function_exists('add_class_by_route'))
{
    function add_class_by_route($route, $class = 'is-active')
    {
        if (! is_equal_url($route)) {
            return;
        }

        return $class;
    }
}