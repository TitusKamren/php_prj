<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class AssignmentDraf extends Model
{
//    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'assignment_draff';

    protected $fillable = [
        "id",
        "tenant_id",
        "assignment_id",
        "data",
        "created_at"
    ];
}
