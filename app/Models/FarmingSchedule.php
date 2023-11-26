<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FarmingSchedule extends Model
{
    protected $table = 'farming_schedules';
    protected $fillable = ['farmer_id', 'crop_type', 'location', 'start_date', 'end_date', 'activities'];

    public function farmer()
    {
        return $this->belongsTo(User::class, 'farmer_id');
    }
}
