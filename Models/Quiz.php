<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['start_date', 'end_date', 'deleted_at'];

    protected $table = 'quiz';

    protected $fillable = [
        "id",
        "tenant_id",
        "course_id",
        "code",
        "name",
        "start_date",
        "end_date",
        "time",
        "open_view_score",
        "score",
        "sort_index",
        "status",
        "created_user_id",
        "number_of_time",
    ];

    public function quiz_question_category()
    {
        return $this->hasMany(QuizQuestionCategory::class, 'quiz_id', '_id');
    }

    public function quiz_question()
    {
        return $this->hasMany(QuizQuestion::class, 'quiz_id', '_id');
    }
    public function assignment()
    {
        return $this->hasMany(Assignment::class, 'quiz_id', '_id');
    }
    public function course()
    {
        return $this->hasOne(Course::class, '_id', 'course_id');
    }
}
