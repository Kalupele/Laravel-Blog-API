<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'status'
    ];

    public function category(){
        return $this->belongsTo(Categoty::class);
    }
}
