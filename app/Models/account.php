<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;

    public function getCustomer(){
        return $this->belongsTo(customer::class,'customer_id','id');
    }
}
