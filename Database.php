<?php

class Database extends PDO {

    private $user = 'username';
    private $pass = 'password';

    public function __construct() {
        parent::__construct('mysql:host=localhost;dbname=expert_b6_crm', $this->user, $this->pass);
    }

}
