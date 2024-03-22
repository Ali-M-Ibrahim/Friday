<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    public function getCredentials(){
        return $this->hasOne(credentials::class);
    }

    public function getAccounts(){
        return $this->hasMany(account::class)->orderBy('price','desc');;
    }


    public function getServices(){
        return $this->belongsToMany(service::class,
        'servicecustomers',
            'customer_id',
            'service_id'
        );
    }
}
