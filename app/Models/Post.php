<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{   
    use HasUuids;
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'post';

    protected $fillable = ['title', 'body', 'published', 'auther']; 


    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }


    }
