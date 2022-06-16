<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];

    // this is the opposite of fillable
    protected $guarded = ['id']; // every table can be filled other than id
    protected $with = ['category', 'author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // To change the method name it, must include a field that you want to change
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
