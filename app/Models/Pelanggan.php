<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    Protected $table     = 'Pelanggan';
    Protected $primarykey     = 'Pelanggan_id';
    Protected $Fillable     = [
        'First_name',
        'Last_name',
        'Birthday',
        'Gender',
        'Email',
        'Phone',
    ]
;}
