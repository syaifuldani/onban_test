<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPenerimaanWorker extends Model
{
    use HasFactory;

    protected $table = 'status_penerimaan_worker';

    protected $fillable = [
       'status_penerimaan',
       'keterangan',
    ];
}
