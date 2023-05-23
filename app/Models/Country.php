<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Order;

class country extends Model
{
    use HasFactory;
    protected $fillable = ['name', "country_id"];
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
