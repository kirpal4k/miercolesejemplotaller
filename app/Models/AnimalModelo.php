<?php

namespace App\Models;

use CodeIgniter\Model;

class AnimalModelo extends Model{
    protected $table = 'animales';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nombre', 'foto', 'edad', 'descripcion', 'tipo'];


}