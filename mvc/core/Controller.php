<?php 
    class Controller{
        public function view($view, $data = []){
            if(file_exists(''.__DIR_ROOT.'/mvc/views/'.$view.'.php')){
                require_once ''.__DIR_ROOT.'/mvc/views/'.$view.'.php';
            }
        }


        public function model($model){
            if(file_exists(''.__DIR_ROOT.'/mvc/models/'.$model.'.php')){
                require_once ''.__DIR_ROOT.'/mvc/models/'.$model.'.php';
              
                return new $model;
            } 
        }
    }

?>