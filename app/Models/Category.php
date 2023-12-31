<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["title", "slug", "id_language", "id_meal"];

    public function language(){
        return $this->belongsTo(Language::class, "id_language");
    }

    public function meals()
    {
        return $this->belongsToMany(Meal::class, 'meal_category', 'id_category', 'id_meal');
    }
}
