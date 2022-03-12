<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class CourseEnroll extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'course_enrolls';

    protected $fillable = [
        "user_id",
        "course_id",
        "role_id",
        "course_team_id",
        "enroll_code",
        "fullname",
        "email",
        "phone"
    ];

    public function user()
    {
        return $this->hasOne(User::class, '_id', 'user_id');
    }
}
