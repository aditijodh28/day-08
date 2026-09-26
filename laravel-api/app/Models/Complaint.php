<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'facility_id',
        'user_id',
        'complaint_text',
        'status'
    ];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}