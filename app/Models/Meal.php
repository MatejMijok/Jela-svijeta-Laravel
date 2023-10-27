<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = ["title", "description", "status", "id_language", "id_category"];

    public function language(){
        return $this->belongsTo(Language::class, "id_language");
    }

    public function category(){
        return $this->belongsTo(Category::class,"id_category");
    }
}
