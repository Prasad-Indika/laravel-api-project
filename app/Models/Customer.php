<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact',
        'salary',
        'image',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class,'cus_id');
    }
}
