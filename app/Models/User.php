<?php
namespace App\Models;

abstract class User extends Model {
    public $id;
    public $nom;
    public $date_naissance;
    public $email;
    public $password;

    abstract public function role(); // chaque type d'utilisateur définit son rôle
}
