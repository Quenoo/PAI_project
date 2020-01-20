<?php declare(strict_types=1);

class AppController {
    private $request;

    public function __construct()
    {
        session_start();
        $this->request = $_SERVER['REQUEST_METHOD'];
    }

    protected function isGet(): bool
    {
        return $this->request === 'GET';
    }

    protected function isPost(): bool
    {
        return $this->request === 'POST';
    }

    function GetViewName()
    {
        $name = explode('Controller', get_class($this));
        $name = $name.'View';
        return $name[0];
    }

    protected function render(string $template = null, array $variables = [])
    {
        // $templatePath = $template ? dirname(__DIR__).'//Views//'.get_class($this).'//'. $template.'.php' : '';
        $name = $this->GetViewName();
        $templatePath = $template ? dirname(__DIR__).'\\Views\\'.$template.'View\\'.$template.'View'.'.php' : '';
        $output = 'File not found';
        
        if(file_exists($templatePath)){
            extract($variables);
            
            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }
        print $output;
    }
}