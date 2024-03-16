<?php
    class App{
        protected $Controller = "Home";
        protected $Action = "show";
        protected $Parram = [];
        function __construct(){

            
            
            $url = $this->handleUrl();
            
            if(COUNT($url) != 0 && file_exists("./mvc/controllers/$url[0].php")){
                $this->Controller = $url[0];
                unset($url[0]);    
            }
                 
       
            
            require_once './mvc/controllers/'.$this->Controller.'.php';

            if(!empty($url[1])){
                if(method_exists($this->Controller, $url[1])){
                    $this->Action = $url[1];
                }
                unset($url[1]);
            }
            $this->Parram =array_values($url) ?? [];   
            call_user_func_array([new $this->Controller, $this->Action],$this->Parram);
        }

        function handleUrl(){
            if(isset($_GET["url"])){
                $url = $_GET["url"];
           
                $url = filter_var(trim($url  ,"/"));
                return explode('/', $url);
            }
            return [];
        }
    }

?>