<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ["title", "year", "number_of_pages", "author_id"];

    public  function author()
    {
       return $this->belongsTo(Author::class);
    }
}
