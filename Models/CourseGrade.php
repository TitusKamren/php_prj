<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class CourseGrade extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'course_grades';

    protected $fillable = [
        'course_id',
        'user_id',
        'course_module_id',
        'user_fullname',
        'final_grade',
        'content',
        'play_status',
        'status',
        'time_play',
        'health',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course_module()
    {
        return $this->belongsTo(CourseModule::class, 'course_module_id');
    }
}
