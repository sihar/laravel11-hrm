<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkHistory extends Model
{
    use SoftDeletes;
    protected $fillable = ['employee_id', 'job_title', 'start_date', 'end_date'];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
