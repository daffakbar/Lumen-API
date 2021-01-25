<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $guarded =[];
    public function karyawan(){
    	return $this->belongsTo('App\Models\Karyawan');
    }
}
