<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class AssignmentDetail extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'assignment_detail';

    protected $fillable = [
        "id",
        "tenant_id",
        "assignment_id",
        "quiz_question_id",
        "quiz_question_type",
        "answer",
        "score",
        "status"
    ];

    public function quiz_question()
    {
        return $this->belongsTo(QuizQuestion::class, 'quiz_question_id');
    }
}
