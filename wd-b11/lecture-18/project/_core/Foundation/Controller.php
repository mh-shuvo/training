<?php
namespace Atova\Eshoper\Foundation;
use App\Controller\WelcomeController;
class Controller {

    protected $currentController = WelcomeController::class;
    protected $currentMethod = "index";
    protected $params = [];
    
    public function __construct(){
        $url = $this->getUrl();
        
        if($url != false){
        
          $fullyQualifiedClassName = "App\\Controller\\" . ucwords($url[0]) . "Controller";
          // Look in controllers for first value
          if(class_exists($fullyQualifiedClassName)){
            // If exists, set as controller
            $this->currentController = $fullyQualifiedClassName;
            // Unset 0 Index
            unset($url[0]);
          }
        }

      // Instantiate controller class
      $this->currentController = new $this->currentController;

      // Check for second part of url
      if(isset($url[1])){
        // Check to see if method exists in controller
        if(method_exists($this->currentController, $url[1])){
          $this->currentMethod = $url[1];
          // Unset 1 index
          unset($url[1]);
        }
      }

      // Get params
      $this->params = $url ? array_values($url) : [];

      // Call a callback with array of params
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

    }

    public function getUrl()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
        return false;
    }
}