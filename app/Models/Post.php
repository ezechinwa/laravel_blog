<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    protected  $fillable = ['category_id','title','slug','excerpt','body'];
    protected $with = ['category','user'];


    function scopeFilter($query, array $filters){


        $query->when($filters['search'] ?? false, function ($query, $search) {

            $query->where( function ($query) use ($search){
                $query->where('title', 'like', '%' . $search . '%')
                       ->orWhere('body', 'like', '%' . $search . '%');
            });
        });
        $query->when($filters['category'] ?? false, function ($query, $category) {
            $query->whereHas('category', function ($query) use ($category) {
                    $query->where('slug' , $category);
                });
        });
        $query->when($filters['username'] ?? false, function ($query, $username){
            $query->whereHas('user', function ($query) use ($username) {
                    $query->where('username' , $username);
                });
        });
    }
    function category(){
        return $this->belongsTo(Category::class);
    }

    function user(){
        return $this->belongsTo(User::class);
    }


}
