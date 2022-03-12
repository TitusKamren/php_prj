<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'courses';

    protected $fillable = [
        "id",
        "tenant_id",
        "sis_id",
        "code",
        "name",
        "image",
        "description",
        "grade_id",
        "subject_id",
        "school_year_id",
        "moet_unit_id",
        "start_date",
        "end_date",
        "status",
        "created_user_id"
    ];

    public function schoolYear()
    {
        return $this->hasOne(SchoolYear::class, '_id', 'school_year_id');
    }

    public function moetUnit()
    {
        return $this->hasOne(MoetUnit::class, '_id', 'moet_unit_id');
    }

    public function enrolls()
    {
        return $this->hasMany(CourseEnroll::class, 'course_id', '_id');
    }

    public function grade()
    {
        return $this->hasOne(Grade::class, '_id', 'grade_id');
    }

    public function subject()
    {
        return $this->hasOne(Subject::class, '_id', 'subject_id');
    }

}
