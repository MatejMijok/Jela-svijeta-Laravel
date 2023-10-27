<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    public $fillable = ["id_category", "id_language", "nameTranslation"];

    public function category(){
        return $this->belongsTo(Category::class, "id_category");
    }

    public function language(){
        return $this->belongsTo(Language::class,"id_language");
    }
}
