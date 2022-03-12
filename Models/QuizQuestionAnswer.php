<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class QuizQuestionAnswer extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['start_date', 'end_date', 'deleted_at'];

    protected $table = 'quiz_question_answer';

    protected $fillable = [
        "id",
        "tenant_id",
        "quiz_id",
        "question_id",
        "quiz_question_id",
        "content",
        "is_true",
        "percent_score",
        "created_user_id"
    ];
}
