<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class CourseModule extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'open_date', 'close_date'];

    protected $table = 'course_modules';

    protected $fillable = [
        'sis_id',
        'course_id',
        'object_type',
        'object_id',
        'name',
        'access_code',
        'description',
        'max_grade',
        'settings',
        'course_module_parent_id',
        'course_module_path',
        'open_date',
        'close_date',
        'sort_index',
        'status'
    ];

    public function game()
    {
        return $this->hasOne(Game::class, '_id', 'object_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function object()
    {
        return $this->belongsTo(Game::class, 'object_id');
    }
}
