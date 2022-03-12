<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class QuizQuestionCategory extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['deleted_at'];

    protected $table = 'quiz_question_category';
    protected $fillable = [
        "id",
        "tenant_id",
        "quiz_id",
        "name",
        "parent_id",
        "sort_index",
        "status",
        "created_user_id"
    ];

    public function quiz_question()
    {
        return $this->hasMany(QuizQuestion::class, 'quiz_question_category_id', '_id');
    }
}
