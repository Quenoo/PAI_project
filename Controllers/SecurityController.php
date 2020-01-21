<?php

require_once('AppController.php');

class SecurityController extends AppController {

    public function CheckIfLogged()
    {
        // $_SESSION['user'] = "ABC";
        if(isset($_SESSION['user'])){
            #print()
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=payTickets");
            print($url);
            return;
            }
        $this->render('Login');
    }

    public function login()
        {   
            // $userRepository = new UserRepository();
            print("LOGIN");
            if ($this->isPost()) {
                $email = $_POST['email'];
                $password = $_POST['password'];
    
                // $user = $userRepository->getUser($email);
    
                // if (!$user) {
                //     $this->render('login', ['messages' => ['User with this email not exist!']]);
                //     return;
                // }
    
                // if ($user->getPassword() !== $password) {
                //     $this->render('login', ['messages' => ['Wrong password!']]);
                //     return;
                // }
    
                // $_SESSION["id"] = $user->getEmail();
                // $_SESSION["role"] = $user->getRole();

                // if(isset($_SESSION['TICKETS'])){HEADER PAY}
                // $url = "http://$_SERVER[HTTP_HOST]/";
                // header("Location: {$url}?page=profile");
                // return;
                $this->render("Profile");
            }
            //$this->render("Profile");
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=profile");
        }
}