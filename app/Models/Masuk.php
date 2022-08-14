<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Masuk extends Model
{
    protected $fillable = [
        'id',
        'Nama_brg',
        'Kode_brg',
        'Stock',
        'status_id',

    ];

    public function Status(){
        return $this->belongsTo(Status::class);
    }
}
