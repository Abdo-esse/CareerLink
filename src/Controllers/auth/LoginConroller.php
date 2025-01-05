<?php
class LoginContr 
{
    private $nameOrEmaile;
    private $password;
    public function __construct($nameOrEmaile,$password)
    {
       $this->nameOrEmaile=$nameOrEmaile;
       $this->password=$password;

    }
    
}