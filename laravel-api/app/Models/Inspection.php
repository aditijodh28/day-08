<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $fillable = [
        'facility_id',
        'user_id',
        'inspection_date',
        'cleanliness_score',
        'odor_score',
        'waste_level',
        'remarks'
    ];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}