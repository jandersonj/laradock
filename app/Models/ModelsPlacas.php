<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsPlacas extends Model
{
    protected $table = 'models_placas';
    protected $fillable = ['nome', 'telefone', 'cpf', 'placa_carro'];
}
