<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class QuestionCategory extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'question_category';

    protected $fillable = [
        "id",
        "tenant_id",
        "code",
        "name",
        "parent_id",
        "grade_id",
        "subject_id",
        "sort_index",
        "status",
        "created_user_id"
    ];
}
