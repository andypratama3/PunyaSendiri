<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keluar extends Model
{
    protected $fillable = [
        'id',
        'Nama_brg',
        'Kode_brg',
        'status_id',
    ];

    public function Status(){
        return $this->belongsTo(Status::class);
    }
}
