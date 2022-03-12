<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Assignment extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'assignment';

    protected $fillable = [
        "_id",
        "tenant_id",
        "course_id",
        "user_id",
        "start_time",
        "end_time",
        "version",
        "status",
        "open_view_score",
        "score",
        "quiz_id",
        "time",
        "created_user_id"
    ];

    public function assignment_detail()
    {
        return $this->hasMany(AssignmentDetail::class, 'assignment_id', '_id');
    }
    public function quiz()
    {
        return $this->hasOne(Quiz::class, '_id', 'quiz_id');
    }
}
