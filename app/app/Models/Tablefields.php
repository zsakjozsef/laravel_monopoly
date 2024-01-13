<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablefields extends Model
{
    use HasFactory;
    protected $fillable = [
        'szam',
        'nev',
        'leiras',
        'tipus',
        'ar',
        'tulajdonos_id',
        'haz',
        'szalloda',
        'szin',
        'kep'
    ];
}

