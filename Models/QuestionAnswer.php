<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class QuestionAnswer extends Model
{
//    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'question_answers';

    protected $fillable = [
        "id",
        "tenant_id",
        "question_id",
        "content",
        "is_true",
        "percent",
        "created_user_id"
    ];
}
