<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'artical_one',
        'artical_two',
        'artical_three',
        'artical_four',
        'artical_five',
        'artical_six',
        'artical_seven',
        'artical_eight',
        'artical_nine',
        'artical_ten',
        'categories',
        'date',
        'author',
        'image',
        'read_link',
        'link_text',
    ];
}
