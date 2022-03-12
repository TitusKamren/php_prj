<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class QuizQuestion extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['start_date', 'end_date', 'deleted_at'];

    protected $table = 'quiz_question';

    protected $fillable = [
        "id",
        "tenant_id",
        "quiz_id",
        "question_id",
        "question_name",
        "content",
        "solution_guide",
        "type",
        "quiz_question_category_id",
        "score",
        "sort_index",
        "status",
        "created_user_id"
    ];

    public function answer()
    {
        return $this->hasMany(QuizQuestionAnswer::class, 'quiz_question_id', 'id');
    }
}
