<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryOrder extends Model
{
    use HasFactory;

    protected $table = 'category_orders';
    protected $fillable = ['image','name'];
}
