<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'FullCalendar',
    ['path' => '/full-calendar'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
