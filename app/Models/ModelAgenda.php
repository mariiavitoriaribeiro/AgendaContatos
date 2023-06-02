<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAgenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'telefone', 'email', 'endereco', 'cargo', 'dtnascimento'
    ];
}