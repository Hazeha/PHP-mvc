<?php
/*Usage: Call from the browser: http://localhost/path_to_your_mvc_public_folder_inside_your_webserver

path could For example be: http://localhost/phpexercises/mvc/public/home/Homayoon

*/

/**
* A core class. This is the main class which intercepts the requests and
* delegates the task/responsibility to the appropriate class/controller.
* Based on the entered url, it checks if there exists a controller matching
* the entered noun in the url and the following action e.g home/index.php (home controller and index * action)
* Then uses PHP  call_user_func_array to call the action(Method) passing the parameters  if any
**/
class App 
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct()
    {

        file_exists();

        /**
        * bool method_exists ( mixed $object , string $method_name )
        * Checks if the class method exists in the given object.
        * object : An object instance or a class name
        * method_name : The method name
         **/

            method_exists();

        /**
        * mixed call_user_func_array ( callable $callback , array $param_arr )
        * Calls the callback given by the first parameter with the parameters in param_arr.
        * callback : The callable to be called.
        * param_arr : The parameters to be passed to the callback, as an indexed array.
        **/
        
        //this code calls the CONTROLER->METHOD($params)
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    
    public function parseUrl()
    {

    }
}







