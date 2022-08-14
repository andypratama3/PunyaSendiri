<?php

namespace App\Models;

use App\Models\Masuk;
use App\Models\Keluar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    protected $fillable = [
        'id',
        'nama_status',

    ];
    public function Masuk(){
        return $this->hasMany(Masuk::class, 'status_id','id');
    }
    public function Keluar(){
        return $this->hasMany(Keluar::class, 'status_id','id');
    }

}
