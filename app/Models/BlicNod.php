<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlicNod extends Model
{
    use HasFactory;
protected $table='blic_nodovi';
    protected $fillable=[
'ime',
'adresa',
'naselje',
'ulice'

    ];
}
