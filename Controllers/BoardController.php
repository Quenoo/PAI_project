<?php

require_once('AppController.php');

class BoardController extends AppController {

    public function GetPromoted()
    {
        // TODO: print promoted events
        if (!empty($_POST)) 
        {
            // var_dump($_POST);
        }
        $this->render('Board');
    }
}