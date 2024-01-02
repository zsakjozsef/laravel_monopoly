<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablefields extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'color',
        'title',
        'price',
        'description',
        'image',
    ];
}

