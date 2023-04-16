<?php

//wip
class User {
    private $id;
    private $username;
    private $password;
    private $is_admin;

    public function __construct($id) {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getIs_admin()
    {
        return $this->is_admin;
    }

    public function setId()
    {
        $this->id = $id;
        return $this;
    }

    public function setUsername()
    {
        $this->username = $username;
        return $this;
    }

    public function setPassword()
    {
        $this->password = $password;
        return $this;
    }

    public function setIs_admin()
    {
        $this->is_admin = $is_admin;
        return $this;
    }

}