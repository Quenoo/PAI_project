<?php

require_once('AppController.php');

class TicketController extends AppController {

    public function TicketTypes()
    {
        // TODO: get database conection and print promoted
        if (!empty($_POST)) 
        {
            var_dump($_POST);
        }
        $this->render('Ticket');
    }
}