<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clacificaciones extends Model
{
    
    protected $table ='clacificaciones';
    protected $primarykey ='id';
    protected $fillable=['nombre','descripcion'];
}
