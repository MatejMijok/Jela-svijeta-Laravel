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

    public function categories(){
        return $this->belongsToMany(Category::class, 'meal_category', 'id_meal', 'id_category');
    }
}
