<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $collection = 'subjects';
    protected $fillable = ['tenant_id', 'sis_id', 'code', 'name', 'grade_level_id', 'sort_index', 'status'];

    public function grade_level()
    {
        return $this->belongsTo(GradeLevel::class, 'grade_level_id');
    }
}
