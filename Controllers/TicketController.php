<?php

require_once('AppController.php');

class TicketController extends AppController {

    public function TicketTypes()
    {
        $this->render('Ticket');
    }

    public function SaveTickets()
    {
        if (!empty($_POST)) 
        {
            $_SESSION['TicketsTypes'] = [$_POST];
            var_dump($_SESSION['TicketsTypes']);

            if(!isset($_SESSION['user']))
            {
                var_dump('Trzeba sie zalogowac'); // render LogowanieView
            }
        }
        $this->render('Login');
    }
}