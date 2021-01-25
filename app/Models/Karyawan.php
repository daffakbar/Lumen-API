<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $guarded =[];
    public function penjualan(){
    	return $this->hasMany('App\Models\Penjualan');
    }
}
