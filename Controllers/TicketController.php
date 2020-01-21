<?php

require_once('AppController.php');

class TicketController extends AppController {

    public function TicketTypes()
    {
        session_destroy(); // CHANGE THIS LATER!!!
        $this->render('Ticket');
    }

    public function SaveTickets()
    {
        if (!empty($_POST)) 
        {
            $_SESSION['TicketsTypes'] = [$_POST];
            var_dump($_SESSION['TicketsTypes']);
        }
        $url = "http://$_SERVER[HTTP_HOST]/";
        header("Location: {$url}?page=requestTickets");
        var_dump($url);
    }

    public function Pay(){
        var_dump($_SESSION);
        $this->render('Pay');
    }
}