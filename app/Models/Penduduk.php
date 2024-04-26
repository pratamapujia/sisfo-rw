<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Penduduk extends Model
{
  use HasFactory, HasApiTokens, Notifiable;

  protected $table = "penduduk";
  protected $primaryKey = "id";
  protected $fillable = [
    'foto', 'nik', 'nama_lengkap', 'alamat', 'jenis_kelamin', 'agama', 'status', 'tempat', 'tanggal_lahir', 'jumlah_penduduk'
  ]; 
}
