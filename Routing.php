<?php

require_once 'Controllers\BoardController.php';
require_once 'Controllers\TicketController.php';
require_once 'Controllers\SecurityController.php';
require_once 'Controllers\ProfileController.php';

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
            'saveTickets' => [
                'controller' => 'TicketController',
                'action' => 'SaveTickets'
            ],
            'payTickets' => [
                'controller' => 'TicketController',
                'action' => 'Pay'
            ],
            'requestTickets' => [
                'controller' => 'SecurityController',
                'action' => 'CheckIfLogged'
            ],
            'login' => [
                'controller' => 'SecurityController',
                'action' => 'login'
            ],
            'profile' => [
                'controller' => 'ProfileController',
                'action' => 'GetUserTickets'
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