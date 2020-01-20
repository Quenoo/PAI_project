<?php

require_once 'Controllers\BoardController.php';
require_once 'Controllers\TicketController.php';

class Routing {
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'board' => [
                'controller' => 'BoardController',
                'action' => 'GetPromoted'
            ],
            'tickets' => [
                'controller' => 'TicketController',
                'action' => 'TicketTypes'
            ],
            'payTickets' => [
                'controller' => 'TicketController',
                'action' => 'SaveTickets'
            ]
        ];
    }

    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'board'; /* is page set? if not use 'board */

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller']; /* Create Controlled named after page */
            $action = $this->routes[$page]['action']; /* Perfom action specified in routes */

            $object = new $controller;
            $object->$action();
        }
    }
}