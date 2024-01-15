<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orderdetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded=[];

    public function menu(){
        return $this->belongsTo(Menu::class, 'menu_id','id')->withTrashed();
    }
}