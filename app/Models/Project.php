<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";
    protected $primaryKey = "project_id";
    public  $incrementing = true;

    protected $fillable = [
        'project_id',
        'title',
        'description',
        'sumOfSpentTime',
        'is_active'
    ];

    public  function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
