<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'title',
        'text',
        'user_id',
        'category_id'
        ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
