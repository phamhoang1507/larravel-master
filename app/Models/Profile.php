<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['ho_ten', 'ngay_sinh', 'nghe_nghiep', 'que_quan'];
    protected $casts = ['ngay_sinh' => 'date'];
}