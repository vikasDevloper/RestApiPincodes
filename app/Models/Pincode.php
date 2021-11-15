<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pincode extends Model
{
    use HasFactory;
	public $timestamps = false;


     protected $fillable = [
        'officename','pincode', 'officeType', 'Deliverystatus', 'divisionname', 'regionname', 'circlename', 'Taluk', 'Districtname', 'statename'
    ];
}
