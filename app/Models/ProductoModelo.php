<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModelo extends Model{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['producto', 'fotografia', 'precio', 'descripcion', 'tipo'];



}