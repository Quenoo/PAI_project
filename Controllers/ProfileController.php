<?php

require_once('AppController.php');

class ProfileController extends AppController {

    public function GetUserTickets()
    {
        $this->render("Profile");
    }

}