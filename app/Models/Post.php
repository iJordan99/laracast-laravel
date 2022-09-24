<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\belongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // attributes that cant be mass assigned
    // protected $guarded = []

    // attributes that can be mass assigned
    protected $fillable = [
        'title',
        'excerpt',
        'body',
    ];

    // $with is the additional relationships for queries, e.g get the categories and authors by default
    // when toggled use Post::without(['category', 'author'])->get();
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
        $query
            ->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%'));

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas('category', fn ($query) => $query->where('slug', $category))
        );

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas('author', fn ($query) => $query->where('username', $author))
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // laravel assumed the method name is the foreign id in db by default e.g user() would look for user_id etc ..
    public function author()
    {
        // you can manually tell laravel what the foreign key is
        return $this->belongsTo(User::class, 'user_id');
    }
}
