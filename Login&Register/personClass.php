<?php

abstract class Person
{
    private $username;
    private $password;
    private $role;

    function __construct($username, $password,$role)
    {
        $this->$username = $username;
        $this->$password = $password;
        $this->$role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();

    protected function getUsername()
    {
        return $this->username;
    }
}
