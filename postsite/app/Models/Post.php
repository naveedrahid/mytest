<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $guarded = [''];
    protected $primaryKey = 'post_id';

    function category()
    {
        return $this->belongsTo(Category::class,'post_category_id','cat_id');
    }

    public function getRouteKeyName()
    {
     return 'slug';   
    }
}
