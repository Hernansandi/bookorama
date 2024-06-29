<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    public $timestamps = false;
    protected $primaryKey = 'isbn';
    public $incrementing = false;
    protected $fillable = [
        'isbn',
        'author',
        'title',
        'price',
        'categoryid',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryid', 'categoryid');
    }
    
    // Metode untuk mengambil data buku berdasarkan ISBN
    public static function findByISBN($isbn)
    {
        return static::where('isbn', $isbn)->first();
    }

}
