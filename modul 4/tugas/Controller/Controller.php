<?php

namespace Controller;

class Controller
{
    // VARIABLE ATRIBUT
    public $controllerName;
    public $controllerMethod;

    // METHOD UNTUK MENGAMBIL SEMUA ATRIBUT
    public function getControllerAttributes()
    {
        return [
            "ControllerName" => $this->controllerName,
            "Method" => $this->controllerMethod
        ];
    }
}