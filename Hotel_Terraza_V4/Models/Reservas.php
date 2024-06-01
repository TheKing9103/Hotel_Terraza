<?php

class Reservas
{
    
    private $pdo;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = DataBase::connection();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
