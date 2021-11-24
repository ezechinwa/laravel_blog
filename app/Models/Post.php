<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected  $fillable = ['category_id','title','slug','excerpt','body'];
    protected $with = ['category','user'];


    function scopeFilter($query, array $filters){
        if ($filters['search'] ?? true){
            $key = request('search');
            $query
                ->where('title','like',"%$key%")
                ->orwhere('body','like',"%$key%");
        }

    }
    function category(){
        return $this->belongsTo(Category::class);
    }

    function user(){
        return $this->belongsTo(User::class);
    }


}
