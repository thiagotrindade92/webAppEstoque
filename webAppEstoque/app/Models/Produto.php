<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    protected $table = 'produtos';
    public $timestamps = false;

    protected $fillabel = array('nome', 'descricao', 'valor', 'quantidade');

    protected $guarded = ['id'];

    use HasFactory;
}
