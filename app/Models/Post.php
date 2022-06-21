<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id']; // every table can be filled other than id
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        //using isset()
        $query->when($filters['search'] ??  false, function ($query, $search) {
            return $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        }); // you can chain '->' 

        // using callback
        $query->when($filters['category'] ?? false, function ($query, $category) {
            // return $query->whereHas('category', function ($query, $categoy) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // using arrow function
        // with arrow function you don't need to use 'user' keyword
        $query->when(
            $filter['author'] ?? false,
            fn ($query, $author) => $query->whereHas(
                'author',
                fn ($query) => $query->where('username', $author)
            )
        );
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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
