<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];//mark this column as a date
    protected $fillable = [
        "name",
        "body"
    ];


    public function category() {
        return $this->belongsTo(Category::class);
    }
}
