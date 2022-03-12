<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class MoetUnit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $collection = 'moet_units';

    protected $fillable = ['code', 'name', 'sis_id', 'tenant_id', 'parent_id', 'path', 'moet_level', 'settings', 'grade_level_id', 'status'];

    public function grade_level()
    {
        return $this->belongsTo(GradeLevel::class, 'grade_level_id');
    }
}
