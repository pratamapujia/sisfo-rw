<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    use HasFactory;

    protected $table = "rt";
    protected $primarykey = "id_rt";
    protected $fillable = ['id_rt', 'nama', 'crated_at', 'deleted_at'];
}
