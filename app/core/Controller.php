<?php
/**
* A very simple core Controller. with only two methods model and view
* model : returns an instance of the model requested  by a controller
* view: loads the view requested by other controllers
**/

class Controller
{
    public function model($model)
    {
        require_once '../app/models/'.$model.'.php';
        
        return new $model();
    }
    
    public function view($view, $data)
    {
        
        require_once '../app/views/' . $view . '.php';
    }
}
