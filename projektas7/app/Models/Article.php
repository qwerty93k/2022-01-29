<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function article_category()
    {
        return $this->belongsTo(ArticleCategory::class, 'category_id', 'id');
    }
}
