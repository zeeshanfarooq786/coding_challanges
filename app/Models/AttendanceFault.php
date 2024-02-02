<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceFault extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
