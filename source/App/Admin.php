<?php

namespace Source\App;

class Admin
{
    public function home($data)
    {
        echo "<h1>Bem vindo admin!</h1>";
        var_dump($data);
    }

}