<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id']; // every table can be filled other than id
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ??  false, function ($query, $search) {
            return $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        }); // you can chain '->' 

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                // return $query->whereHas('category', function ($query, $categoy) {
                $query->where('slug', $category);
            });
        });
    }

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
