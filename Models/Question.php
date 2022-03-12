<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'questions';
    protected $fillable = [
        "id",
        "tenant_id",
        "question_category_id",
        "grade_id",
        "subject_id",
        "code",
        "name",
        "content",
        "solution_guide",
        "type",
        "status",
        "is_private",
        "created_user_id"
    ];

    public function answer()
    {
        return $this->hasMany(QuestionAnswer::class, 'question_id', 'id');
    }
}
