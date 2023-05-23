<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class blog extends Model
{
    use HasFactory;
    protected $table ='blogs';
    protected $fillable =['name','description','image','id'];

}
