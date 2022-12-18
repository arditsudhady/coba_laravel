<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // hanya yang boleh
    // protected $fillable = ['title', 'excerpt', 'body'];

    // dikecualikan
    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        // versi qoulback
        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // versi Erou function
        $query->when($filters['user'] ?? false, fn($query, $user) => 
            $query->whereHas('user', fn($query) =>
                $query->where('username', $user) 
            ) 
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
