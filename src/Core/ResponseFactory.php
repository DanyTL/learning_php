<?php

namespace Core;


class ResponseFactory
{
    public static function create($view, array $params = [])
    {
        return new Response($view, $params);
    }
}