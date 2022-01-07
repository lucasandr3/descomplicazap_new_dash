<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model as Model;

class Expense extends Model
{
    protected $table = "expenses";
    protected $fillable = ['*'];
    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->user_id = 1;;
        });

        static::addGlobalScope('userID', function (Builder $builder) {
            $builder->where('user_id', '=', 1);
        });
    }
}
