<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = "tasks";
    protected $primaryKey = "task_id";
    public  $incrementing = true;

    protected $fillable = [
        'task_id',
        'project_id',
        'title',
        'spent_time',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
